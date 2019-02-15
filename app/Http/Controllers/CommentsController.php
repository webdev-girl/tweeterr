<?php


namespace App\Http\Controllers;
//
// use App\Comment;
// use App\Tweet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentsController extends Controller
{

   // public function __construct() {
   //     $this->middleware('auth');
   // }
   //
   // public function __construct(Comment $comment)
   //  {
   //     $this->comment = $comment;
   //  }
   //
   //  public function create($post_id)
   //  {
   //    return View::make('comments.create');
   //  }
   //
   // public function store(CommentRequest $request)
   // {
   //     $tweet = Tweet::findOrFail($request->post_id);
   //
   //      Comment::create([
   //          'comment' => $request->comment,
   //          'user_id' => Auth::id(),
   //          'post_id' => $post->id
   //      ]);
   //      return redirect()->route('timeline.show', $post->id);
   //
   //
   //      public function store(Request $request)
   //          {
   //              $comments = new Comment;
   //              $comments->comment= $request->get('comment');
   //              $comments->user()->associate($request->user());
   //              $tweets = Tweet::find($request->get('tweet_id'));
   //              $tweets->comments()->save($comment);
   //
   //              return back();

   //              public function replyStore(Request $request){
   //                   $reply = new Comment();
   //                   $reply->body = $request->get('comment_body');
   //                   $reply->user()->associate($request->user());
   //                   $reply->parent_id = $request->get('comment_id');
   //                   $tweet = Tweet::find($request->get('tweets_id'));
   //                   $tweet->comments()->save($reply);
   //
   //                    return back();

}
