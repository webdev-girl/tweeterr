<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\TweetLike;
use App\User;
use App\Follower;
use Auth;
use DB;
use App\Http\Resources\Tweet as TweetResource;
use App\Http\Resources\TweetLike as TweetLikeResource;

//use Illuminate\Foundation\Auth\AuthenticatesUsers;
class PostsController extends Controller
 {
    public function __construct() {
       $this->middleware('auth');
   }

  //  public function create(){
  //
  //     return view('timeline');
  // }
   //  public function show(){
   //      return view('timeline{id}');
   // }
   //
   //
   //  public function show($id) {
   // $tweet = Tweet::findOrFail($id);
   // return view('timeline', ['tweet' => $tweets]);
   //  }

    // this works
    public function index() {
            $tweet = Tweet::get();
            $user = Auth::user();
            $tweet = new Tweet;
            $tweets = $tweet->get();
            $tweets = $tweet->where('user_id',$user->id)->get();
            $tweetLikes = new TweetLike;
            $comment = new Comment;
            $comments = $comment->get();
            //$tweets = Tweet::orderBy('created_at','desc')->get();
            $users = new User;
            $profilefollowers = $users = $users->get();
      // $follower = new Follower;
      // $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();

             $tweet = Tweet::orderBy('created_at','desc')->get();
             $tweetCollection = array();

            foreach ($tweets as $tweet) {
            $newTweet = $tweet;
            // $comment= Tweet::find($tweet->id)->comment;
               // $newTweet['comments'] = $comments;

           $newTweet['liked'] = false;
           // $tweetLike = \DB::table('tweetlikes')->where('user_id', $user->id)->where('tweet_id', $tweet->id)->orderBy('created_at','DESC')->first();

           if(isset($tweetLike->like) && ($tweetLike->like == "1")){
               $newTweet['liked'] = true;
           }
           $newTweet['user'] = Tweet::find($tweet->id)->user;

           if($user->id == $tweet->user_id){
               $newTweet['has_permissions'] = 1;
           }

          //  if($user->id == $tweet->user_id){
          //      $newTweet['can_delete'] = 1;
          // }
          $tweetCollection[] = $newTweet;
        }
         $tweets = $tweetCollection;

        return view('timeline', compact('tweets'));
        }



   //   public function show(){
   //   $user = Auth::user();
   //   $tweet = new Tweet;
   //   $tweet->user_id = $user->id;
   //   $tweet = Tweet::all();
   //   $tweet = \DB::table('tweets')->latest()->get();
   //      // return redirect('timeline');
   //     return view('timeline', compact('tweets'));
   // }

     // public function store(Request $request){
     //  $tweet =  new Tweet;
     //  $tweet->user_id = $request->get('user_id');
     //  $tweet->tweet = $request->get('tweet');
     //  Tweet::create($request->all());
     //  $tweet->save();
     //      return redirect('timeline');
     //  }
     /// /////this works
         public function saveTweet(Request $request){
             $user = Auth::user();
             $tweet = new Tweet;
             $tweet ->user_id = $user->id;
             $tweet ->tweet = $request->tweet;
             $tweet -> save();
             return redirect('home');
         }
     /////////this works
         public function deleteTweet(Request $request) {
         $tweet = Tweet::find($request->tweet_id);
         if($tweet){
         Tweet::destroy($request->tweet_id);
         }
         // return redirect('home');
            return back()
                ->with('success','Successfully deleted!!.');
         }
     ///// this works
         public function likeTweet(Request $request){
             $user = Auth::user();
             $tweetLike = new TweetLike;
             $tweetLike ->user_id = $user->id;
             $tweetLike ->tweet_id = $request->tweet_id;
             $tweetLike ->like = $request->like;
             $tweetLike -> save();
              return redirect('home');
             }

         public function delete($id){
             $user = Auth::user();
             Comment::where('id', $id)->delete();
               return redirect('home');
         }

     ////// this works
         public function editTweet(Request $request){
             $tweet = Tweet::find($request->tweet_id);
             $tweet ->tweet = $request->tweet;
             $tweet->save();
              return redirect('home');
               // var_dump($tweet);die();
        }
     ////// this works
         public function editTweetDisplay(Request $request, $id){
             $tweet = new Tweet;
             $tweet = Tweet::find($id);
             return view('edit-tweet', compact('tweet'));
         }
     //     public function index(Request $request, Tweet $tweet)
     // {
     //     $tweets = $tweet->whereIn($user_id, $request->user();
     //                     ->pluck('users.id');
     //                     ->push($request->user()->id));
     //                     ->with('user');
     //                     ->orderBy('created_at', 'desc');
     //                     ->take($request->get('limit', 10;
     //                     ->get();
     //
     //         return response()->json($tweets);
     //     }

         public function store(Request $request, Post $post)
         {
             $newTweet = $request->user()->tweets()->create([
                 'body' => $request->get('body')
             ]);

             return response()->json($tweet->with('user')->find($newTweet->id));
         }

           public function getAllTweets(){
               $tweets = Tweet::get();
               return new TweetResource($tweets);
        }
           public function getAlltweetLikes(){
               $tweetlikes = TweetLike::get();
               return new TweetLikeResource($tweetlikes);
           }
           public function getTweetByNumber($number){
               $tweets = Tweet::limit($number)->get();
               return new TweetResource($tweets);
           }
           public function saveTweets($number){
               $tweets = Tweet::limit($number)->get();
               return new TweetResource($tweets);
           }
     }
