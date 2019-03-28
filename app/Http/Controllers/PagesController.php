<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct(){
        $this->middleware('validate_user_agent');
    }

    public function index(){
        return view('index');
    }

    public function contact(){
        return view('contact');
    }

    public function terms(){
        return view('terms');
    }

}
