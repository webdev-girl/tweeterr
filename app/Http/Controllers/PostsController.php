<?php
// use App\Http\Requests\PostRequest;
namespace App\Http\Controllers;

use App\Tweet;
use App\Comment;
use App\User;
// use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;
class PostsController extends Controller
{
    public function __construct() {
       $this->middleware('auth');
   }

//     public function show(){
//         return view('timeline{id}');
//    }


//     public function show($id) {
//    $tweets = Tweet::findOrFail($id);
//    return view('timeline', ['tweet' => $tweets]);
//     }
//

    public function index() {
        $tweets = Tweet::get();
        var_dump("$tweets");
        //return view('timeline', ['tweets' => $tweets]);
          return view('timeline', compact('tweets'));
    }

   //   public function show(){
   //   $user = Auth::user();
   //   $tweets = new Tweet;
   //   $tweets->user_id = $user->id;
   //   $tweets = Tweet::all();
   //   $tweets = \DB::table('tweets')->latest()->get();
   //      // return redirect('timeline');
   //     return view('timeline', compact('tweet'));
   // }

     // public function store(Request $request){
     //  $tweets =  new Tweet;
     //  $tweets->user_id = $request->get('user_id');
     //  $tweets->tweet = $request->get('tweet');
     //  Tweet::create($request->all());
     //  $tweets->save();
     //      return redirect('timeline');
     //  }

    public function savetweet(Request $request){
       $user = Auth::user();
       $tweets = new Tweet;
       $tweets->user_id = $user->id;
       $tweets->tweet = $request->tweet;
       $tweets->save();

      return view('timeline', compact('tweets'));
      }

     // public function postcomment(Request $request){
     //    $user = Auth::user();
     //    $comments = new Comment;
     //    $comments->user_id = $user->id;
     //    $comments->tweet_id = $request->tweet_id;
     //    $comments->comment = $request->comment;
     //    $comments->save();
     //     return redirect('timeline');
        //return view('timeline', compact('comments'));
 }
