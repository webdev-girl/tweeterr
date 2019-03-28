<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/about', function () {
        return view('about');
});

Route::get('/login', function () {
        return view('login');
});

Route::get('/posts', function () {
        return view('posts');
});

Route::get('/profile', function () {
        return view('profile');
});

Route::get('/search', function () {
        return view('search');
});

Route::get('/signup', function () {
        return view('signup');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});



Route::get('/timeline', 'PostsController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/logout', 'LogoutController@logout');


Route::post('/tweet', 'PostsController@saveTweet')->name('savetweet');
Route::delete('/delete-tweet', 'PostsController@deleteTweet')->name('delete-tweet');
Route::post('/like-tweet', 'PostsController@likeTweet');
Route::get('/comment', 'CommentsController@saveComment')->name('savecomment');
Route::post('/comment', 'CommentsController@saveComment')->name('savecomment');

// Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
// Route::get('Posts/{post}', 'PostController@show')->name('post.show');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
