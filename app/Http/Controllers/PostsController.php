<?php
// use App\Http\Requests\PostRequest;
namespace App\Http\Controllers;

use App\Tweet;
use App\TweetLike;
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

    public function saveTweet(Request $request){
       $user = Auth::user();
       $tweets = new Tweet;
       $tweets->user_id = $user->id;
       $tweets->tweet = $request->tweet;
       // $tweets->save();
       return view('timeline', compact('tweets'));
      }

    public function editTweet(Request $request){
         $tweets = Tweet::find($request->tweet_id);
         $tweets->tweet = $request->editTweet;
         $tweets->save();
         return view('timeline', compact('tweets'));
        }

    public function editTweetDisplay($id){
         $tweets =  Tweet::find($id);
         // var_dump($tweet);die();
         return view('edit-tweet', compact('tweets'));
        }

    public function tweetLike(Request $request){
           $user = Auth::user();
           $tweetLikes = new TweetLike;
           $tweetLikes->user_id = $user->id;
           $tweetLikes->tweet_id = $request->tweet_id;
           $tweetLikes->like = $request->like;
           // $tweetLikes->save();
           return view('timeline', compact('tweetLikes'));


          // if (isset($tweetLikes->like) && ($tweetlikes->like == "1")
          //   $tweetLikes['like'] = true;
          }



       public function deleteTweet(Request $request) {
        $user = Auth::user();
        $destroy = Tweet::find($request->tweet_id);
        If($destroy){
            Tweet::destroy($request->tweet_id);
        }
        return back()->with('success', 'Tweet has been deleted successfully!');

}
    // public function postComment(Request $request){
    //     $user = Auth::user();
    //     $comments = new Comment;
    //     $comments->user_id = $user->id;
    //     $comments->post_id = $request->post_id;
    //     $comments->comment = $request->comment;
    //     $comments->save();
    //     return view('timeline', compact('comments'));
    // }
}
