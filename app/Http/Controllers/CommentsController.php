<?php


namespace App\Http\Controllers;
use App\Comment;
use App\Tweet;
use Auth;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $user = Auth::user();
        $tweet = new Tweet;
        $comment = new Comment;
        // $comments = $comment->get();
     return redirect('timeline');
    }

    public function saveComment(Request $request){
    $user = Auth::user();
    $comment = new Comment;
    $comment->user_id = $user->id;
    $comment->tweet_id = $request->tweet_id;
    $comment->comment = $request->comment;
     // $comment-> save();
     return redirect('timeline');
  }
}
   // public function __construct(Comment $comment)
   //  {
   //     $this->comment = $comment;
   //  }

    // public function create($post_id)
    // {
    //   return View::make('comments.create');
    // }

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
   //  }

        // public function store(Request $request)
        //     {
        //         $comment = new Comment;
        //         $comment->comment= $request->get('comment');
        //         $comment->user()->associate($request->user());
        //         $tweet = Tweet::find($request->get('tweet_id'));
        //         $tweet->comments()->save($comment);
        //
        //         return back();
        //     }
    //             public function replyStore(Request $request){
    //                  $reply = new Comment();
    //                  $reply->body = $request->get('comment');
    //                  $reply->user()->associate($request->user());
    //                  $reply->parent_id = $request->get('comment_id');
    //                  $tweet = Tweet::find($request->get('tweet_id'));
    //                  $tweet->comments()->save($reply);
    //
    //                  return back();
    // }
