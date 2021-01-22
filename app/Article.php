<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;


class Article extends Model
{
    //Laravel Comments
    use Commentable;
    //LikeDislike system
    use Likeable;
    //Default from laracasts 6
    protected $guarded = [];

    public function path ()
    {
        return view ('articles.show', $this);

    }


    //This method will find the user_id owner of a specific article and its own ID
    //via Tinker > App\Article::find(1)->user;       1 being the ID of article
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //Articles will have plenty of related tags, this function will allow the many-many relationship in database.

    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    // Show liked or disLiked list.count // **current issue**


}
