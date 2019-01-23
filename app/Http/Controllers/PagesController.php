<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
       return view('index');
   }

   public function timeline(){
       return view('timeline');
   }

    public function contact(){
        return view('contact');
    }

    public function terms(){
        return view('terms');
    }


}
