<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('comment_id')->unsigned()->index();
            $table->integer('tweet_id')->unsigned()->index();
            $table->string('post_comment');
            $table->timestamps();
        });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
// Schema::create('comments', function (Blueprint $table) {
//
//    $table->increments('id');
//    $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
//    $table->integer('post_id')->references('id')->on('posts')->onDelete('cascade');
//    $table->string('comment');
//    $table->integer('parent_id')->unsigned();
//    $table->text('body');
//    $table->integer('commenttable_id')->unsigned();
//    $table->string('commenttable_type');
//    $table->timestamps();
// });
// }
