<?php
// use App\Http\Requests\PostRequest;
namespace App\Http\Controllers;

use App\Tweet;
use App\TweetLike;
use App\Comment;
use App\User;
use App\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     // this works
    public function saveTweet(Request $request){
       $user = Auth::user();
       $tweet = new Tweet;
       $tweet->user_id = $user->id;
       $tweet->tweet = $request->tweet;
       $tweet->save();
       return view('timeline', compact('tweets'));
      }

    public function editTweet(Request $request){
           $user = Auth::id();
           $tweet = Tweet::find($request->id);
           // $tweet = Tweet::find($request->tweet_id);
           $tweet->tweet = $request->tweet;
           $tweet->save();
           return view('timeline', compact('tweets'));
       }

    public function editTweetDisplay(Request $request){
          $tweet = Tweet::get();

             // var_dump($tweet);die();
             return view('edit-tweet', compact('tweets'));
        }


    public function likeTweet(Request $request){
           $user = Auth::user();
           $tweetLike = new TweetLike;
           $tweetLike->user_id = $user->id;
           $tweetLike->tweet_id = $request->tweet_id;
           $tweetLike->like = $request->like;
           // $tweetLikes->save();
           return view('timeline', compact('tweetLikes'));


          // if (isset($tweetLikes->like) && ($tweetlikes->like == "1")
          //   $tweetLikes['like'] = true;
          }


          // this works
     public function deleteTweet(Request $request) {
        $user = Auth::user();
        $destroy = Tweet::find($request->tweet_id);
        If($destroy){
            Tweet::destroy($request->tweet_id);
        }
        return back()->with('success', 'Tweet has been deleted successfully!');

 }
     public function saveComment(Request $request){
         $user = Auth::user();
         $comment = new Comment;
         $comment->user_id = $user->id;
         $comment->tweet_id = $request->tweet_id;
         $comment->comment = $request->comment;
          // $comment-> save();
          // return redirect('home');
          return view('timeline', compact('comments'));
    }
}
