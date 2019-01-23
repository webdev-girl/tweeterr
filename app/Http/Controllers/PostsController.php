<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
       public function create(){
        return view('posts/create');
        }

        public function store(){
         return view('posts/store');
       }

         public function user(){
          return view('home/store');
        }

          public function index(){
          $tweets = \DB::table('tweets')->get();
          $data = array('tweets' => $tweets);
          return view('posts');
        //  return view ('posts', compact('tweets'));

        //  public function show($id){
        //  return view('posts/{tweets}');

    //    }

    //    public function show($id){
    //          $tweet = tweets::find($id);
    //          return view ('tweets.show', compact('tweets'));
          }
    }
