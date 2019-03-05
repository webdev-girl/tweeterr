<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function comments(){
            return $this->belongsToMany('App\Comment');
      }

      public function user(){
          return $this->belongsTo('App\User');
      }

    // public function tweetLikes(){
    //       return $this->belongsToMany('App\TweetLikes');
    // }
          // return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');

}
