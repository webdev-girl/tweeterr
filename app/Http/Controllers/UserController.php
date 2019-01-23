<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
    return view('index');
    }

    public function index(){
    return view('login');
    }

    public function index(){
    return view('signup');
    }

    public function user(){
    return view('home');
    }

    public function index(){
    return view('profile');
    }

    public function index(){
    return view('posts');
    }

    public function index(){
    return view('search');
    }

    public function userFollowers(){
        var_dump("userFollowers");
    }

    public function getOtherUser($id, $name){
        var_dump("other user " . $id . " " . $name);
    }
}
