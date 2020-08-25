<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            //relation ident
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('plan_id');
            $table->integer('week');
            $table->timestamps();
            //relationship build
            $table->foreign('student_id')->on('users')->references('id')
                ->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('plan_id')->on('plans')->references('id')
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
        Schema::dropIfExists('positions');
    }
}
