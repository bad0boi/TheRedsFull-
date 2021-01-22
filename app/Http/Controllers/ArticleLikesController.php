<?php

namespace App\Http\Controllers;

use App\Article;

class ArticleLikesController extends Controller
{
    public function store (Article $article)
    {
        $article->likes = auth()->id();   //from laracasts6 likes(current_user()); but undefined in this

        return back ();
    }

    public function destroy (Article $article)
    {
        $article->dislike = auth()->id();



        return back ();
    }
}
