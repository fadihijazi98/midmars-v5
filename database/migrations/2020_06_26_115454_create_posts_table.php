<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('week');
            $table->text('content');
            $table->integer('seen');
            //relation ident
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('topic_id');

            $table->timestamps();
            //relationship build
            $table->foreign('user_id')->on('users')->references('id')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('plan_id')->on('plans')->references('id')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('topic_id')->on('topics')->references('id')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
