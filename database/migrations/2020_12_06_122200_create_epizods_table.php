<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpizodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('epizods', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('course_id')->unsigned();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('type', 10);
            $table->string('name');
            $table->text('lid');
            $table->text('description');
            $table->text('images');
            $table->string('videoUrl');

            $table->string('tags');
            $table->string('time', 15)->default('00:00:00');
            $table->integer('number');
            $table->tinyInteger('status');
            $table->integer('viewCount')->default(0);
            $table->integer('commentCount')->default(0);
            $table->integer('downloadCount')->default(0);
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
        Schema::dropIfExists('epizods');
    }
}
