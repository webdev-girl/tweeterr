<?php

namespace App\Http\Controllers;
use App\Tweets;
//use App\Comments;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(){
        return view('posts/store');
  }

  public function user(){
       return view('home/store');
  }
    public function create(Request $request){
           $tweetsModel = new Tweets;
           $tweetsModel->user_id = 2;
           $tweetsModel->tweets = $request->tweets;
           $tweetsModel->save();
         //  $tweets = Tweets::get();
           $tweets = Tweets::orderBy('created_at', 'desc')->get();
           return view('posts', compact('tweets'));
   }

   public function index(){
      $tweets = \DB::table('tweets')->latest()->get();
      return view ('posts', compact('tweets'));
    }

    public function posts(){
      $tweets = \DB::table('tweets')->latest();
      $tweets = AppTweets::all();
        return view ('posts', compact('tweets'));
    }

    public function show($id){
        $tweets = Tweets::find($id);
        //$tweets = Tweets::find(array('user_id' => "1"));
        return view('posts', compact('tweets'));
   }

}
