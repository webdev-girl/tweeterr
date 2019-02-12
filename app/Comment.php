<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

        // protected $dates = ['created_at', 'updated_at'];



      public function tweets(){
              return $this->belongsTo('App\Tweet');
         }

       public function user(){
           return $this->belongsTo('App\User');
       }
}




    //    public function replies(){
    //      return $this->hasMany(Comment::class, 'parent_id');
    // }
