<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class Tag extends Model
{
    use Commentable;
    //Inverse to Article.php function
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
