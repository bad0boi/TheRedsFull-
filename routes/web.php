<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something grea*/

/*Routes for URL*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

/* Routes in custom main navbar */

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/entertainment', function () {
    return view('entertainment');
});

Route::get('/leaguetable', function () {
    return view('table');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/squads', function () {
    return view('news');
});



Route::get('/story', function () {
                                            //    $article = App\Article::all(); //takes all available articles from database
                                            //    $article = App\Article::take(2)->get(); // takes only 2 articles from databas
                                                //// order by created_at + descending order + newest article to be shown
                                                //*** dont forget it's '\' not '/' in > App\Article

    return view('story', [
        'articles' => App\Article::take(3)->latest()->get() //This will take the 3 most recent articles created in database.
    ]);
});



// 2 Important Conventions below:
// Important fundamental to learn when it comes to CRUD (Create, Read, Update, Delete)
// These two conventions are mainly used for showing all or finding one specific resource,
// however, using other techniques such as; delete or update will require a VERB e.g. PUT, POST methods

Route::get('/articles', 'ArticlesController@index');   // @index is used to show all articles // GET/articles
Route::post('/articles', 'ArticlesController@store'); // @store is used to create new article and save it
Route::get('/articles/create', 'ArticlesController@create'); //@create is used to show the VIEW where
                                                            // user will create new article **also** make sure that it's above
                                                            // the show method due to order being important   //@show is used to show a particular article // GET/articles/:id
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->middleware('can:edit_article'); //->middleware('can:edit_article')  // add middleware for role ability   // @edit is used to show a particular article
Route::put('/articles/{article}', 'ArticlesController@update');
Route::get('/articles/{article}', 'ArticlesController@show'); // show single page


Route::post('/articles/{article}/like', 'ArticleLikesController@store');
Route::delete('/articles/{article}/like', 'ArticleLikesController@destroy');


// ****UPDATE****
// Articles is now SHOUTS Feature, any configurations under the hood named Articles now refers to Shouts.



                                        //  Fundamentals of REST

// GET, PUT, POST, DELETE

// Retrieve = GET >>> GET/articles/:id or GET/articles (for all resources)
// Update = PUT >>> PUT/articles/:id
// Delete = DELETE >>> DELETE/articles/:id
// New = POST >>> POST/articles

                                        // User Profile Feature CRUD Section

Route::get('/allusers', 'ProfileController@allUsers');
Route::get('/profilepicture', 'ProfileController@getProfileAvatar')->name('profileavatar'); // name('x') = Route in markup // e.g. href=" {{ route ('profileavatar') }}
Route::post('/profilepicture', 'ProfileController@profilePictureUpload')->name('profileavatar');
Route::get('/changepassword', 'ProfileController@changePasswordForm')->name('changepassword');
Route::post('/changepassword', 'ProfileController@changePassword')->name('changepassword'); // Change and Save new password
Route::get('/profile', 'ProfileController@profile')->name('profile'); // Your own user profile view
Route::put('/profileupdate', 'ProfileController@profileUpdate')->name('profileupdate'); // Update UserProfile details
Route::get('/profile/{profile}', 'ProfileController@show'); // Show specific Users profile


                                        // Contact Us Feature

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');

                                        // Squad Database (RESTful)

Route::get('/squads', 'SquadController@index');
Route::post('/squads', 'SquadController@store');
Route::get('/squads/create', 'SquadController@create');
Route::get('/squads/{squads}', 'SquadController@show');
Route::get('/squads/{squads}/edit', 'SquadController@edit')->middleware('can:edit_article');
Route::put('/squads/{squads}', 'SquadController@update');




                            // Factory Default Auth and Routes when starting project

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



