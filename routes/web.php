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
Route::get('blade', function () {
   return view('child');
});

 Route::get('/welcome', function () {
    return view('welcome');
 });

 Route::get('/index', function () {
    return view('index');
 });

 Route::get('/layout', function () {
    return view('layout');
 });

 Route::auth();
 Route::get('/home', 'HomeController@index');

 Route::get('/timeline', 'PostsController@index');
 Route::post('/timeline', 'PostsController@savetweet');
 //Route::post('/timeline', 'PostsController@postcomment');
 //Route::get('/timeline', 'PostsController@delete');


Route::get('/logout', function () {
     Auth::logout;
     return redirect('/');
});
