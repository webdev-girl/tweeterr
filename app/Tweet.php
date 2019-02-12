<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{





    public function comments(){
          return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
          // return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    // public function likes(){
    //     return $this->belongsToMany('App\User', 'likes');
    //
    //   }
}
