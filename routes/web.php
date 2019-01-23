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
//Route::get('blade', function () {
//    return view('child');
//});

Route::get('/layout', function () {
        return view('layout');
});

Route::get('/', function () {
   return view('welcome');
});

Route::get('/about', 'PagesController@about');
//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/index', 'PagesController@index');
Route::get('/timeline', 'PagesController@timeline');
Route::get('/contact', 'PagesController@contact');
Route::get('/terms', 'PagesController@terms');




Route::get('/login', function () {
        return view('login');
});
Route::get('/home', function () {
        return view('home');
});


Route::get('/posts', 'PostsController@index');
Route::get('/posts/{tweets}', 'PostsController@show');
Route::get('/posts/{tweets}', 'PostsController@$id');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/store', 'PostsController@createstore');

Route::get('/home', 'UserController@home');
Route::get('/user', 'UserController@index');
Route::get('/user/{user_id}', 'UserController@getOtherUser');


//Route::get('/user/{user}', 'UserController@index');
//Route::get('/tasks/{tasks}', 'TasksController@index');

Route::get('/search', function () {
        return view('search');
});

Route::get('/signup', function () {
        return view('signup');
});
