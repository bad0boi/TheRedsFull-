<?php

namespace App\Http\Controllers;

use App\User;
use App\Article;
use App\Tag;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;


class ArticlesController extends Controller
{
    public function index () {   //use 'index' function to show a list all related resources
        if (request('tag')) {
            $articles = Tag::where('name', request ('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }

//        $article = Article::first();
//        $article = $article->likes->count();
//        var_dump($article);

        return view ('articles.index',
            ['articles' => $articles
            ]);
    }

    public function show($id) //use 'show' function to show a single resource
    {
        // Show single resource
//        dd($articleId);
        $article = Article::findOrFail($id); // the OrFail method will = to 404 | Not Found error
        return view ('articles.show', ['article' => $article]);



    }




    public function create () { //use 'create' > shows a view to create a new resource


       return view('articles.create', [
           'tags' => Tag::all()

       ]);

    }

    public function store () { // 'store' > Persist the new CREATE new article and SAVE it


//
//        //Validation  ref: validateArticle bottom of this page
//
//        request ()->validate ([
//            'title' => 'required',
//            'excerpt' => 'required',
//            'body' => 'required'
//        ]);

       //Create new article w/ tags

        $article = new Article($this->validateArticle());
        $article->user_id = auth()->id();  // This will save the new article to correct user_id owner. // auth()->id()
        $article->save();

        $article->tags()->attach(request('tags'));


        return redirect ('/articles');

        //Creating new article
//         $article = new Article();
//
//         $article->title = request('title');
//         $article->excerpt = request('excerpt');
//         $article->body = request('body');
//
//         $article->save();

         //now re-direct the page

//        return redirect('/articles');


    }

    public function edit ($id) { // 'edit' > Show a view to edit an existing resource

        $article = Article::find($id);


        //find article related to ID
        return view ('articles.edit', compact('article')); // compact is PHP function that will do the same as @show function



    }

    public function update ($id) { // 'update' > Persist the edited resource

        //find article
        $article = Article::find($id);

        //retrieve update field

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect ('/articles/' . $article->id);



    }

    public function destroy () { // 'destroy' > Delete the resource

    }


    protected function validateArticle ()  //This is the validation function referral
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
    }





}
