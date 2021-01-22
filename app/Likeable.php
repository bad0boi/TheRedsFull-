<?php


namespace App;


use Illuminate\Database\Eloquent\Builder;

trait Likeable
{
    //Tweet::withLikes()->get();
    public function scopeWithLikes (Builder $query)
    {
         $query->leftJoinSub(
             'select article_id, sum (liked) likes, sum (FALSE = liked) dislikes from likes group by article_id',
             'likes',
             'likes.article_id',
             'articles.id'

         );
//left JOIN (
//        SELECT article_id, SUM(liked) likes, SUM(FALSE = liked) dislikes from likes GROUP by article_id
//) likes ON likes.article_id = articles.id

    }

    public function isDislikedBy(User $user)
    {
        return (boolean)$user->likes->where('article_id', $this->id)->where('liked', false)->count();
    }

    public function likes()
    {
        return $this->hasMany(Like::class)->where('liked', '=', 1);
    }

    // if like() function doesn't work - likes() has to be changed to not include ->where
    // Create another likes() function and replace existing with new name - for example NoOfLikes()
    // This means that article->likes() found within index.blade.php also have changed

    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('liked', '=', 0);
    }

    public function isLikedBy(User $user)
    {
        return (boolean)$user->likes->where('article_id', $this->id)->where('liked', true)->count();
    }

    public function dislike($user = null)
    {
        return $this->like($user, false);
    }

    public function like($user = null, $liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ],
            [
                'liked' => $liked,
            ]
        );
    }
}
