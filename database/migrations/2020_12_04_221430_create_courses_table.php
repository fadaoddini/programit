<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('slug')->unique();
            $table->string('lid');
            $table->text('images');
            $table->text('video');
            $table->text('description');
            $table->text('tags');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('price');
            $table->integer('takhfif');
            $table->integer('hit');
            $table->tinyInteger('status');
            $table->string('role');
            $table->integer('numlike');
            $table->integer('numcomment');
            $table->integer('cat_id1');
            $table->integer('cat_id2');
            $table->integer('cat_id3');
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
        Schema::dropIfExists('courses');
    }
}
