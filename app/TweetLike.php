<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetLike extends Model
{
    public function tweets(){
            return $this->belongsTo('App\Tweet');
       }
}
