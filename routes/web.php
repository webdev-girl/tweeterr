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

 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('/index', function () {
    return view('index');
 });

 Route::get('/loginpage', function () {
    return view('loginpage');
 });
 Route::auth();
 Route::get('/home', 'HomeController@index');

Route::get('/feed', 'PostsController@index');
Route::post('/feed', 'PostsController@saveTweet');
Route::get('/edit-tweet/{id}', 'PostsController@editTweetDisplay')->name('tweetDisplay');
Route::post('/edit-tweet', 'PostsController@editTweet')->name('editTweet');
Route::post('/feed', 'PostsController@tweetLike')->name('tweetLike');
// Route::post('/feed', 'PostsController@postComment')->name('postComment');
Route::delete('/feed', 'PostsController@deleteTweet')->name('delete');


Route::get('/logout', function () {
     Auth::logout;
     return redirect('/');
});
