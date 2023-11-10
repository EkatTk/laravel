<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('season');
            $table->string('episode');
            $table->string('title');
            $table->string('title_eng');
            $table->string('director');
            $table->string('screenwriter');
            $table->string('slug')->unique();
            $table->text('content');
            $table->integer('category_id')->unsigned();
            $table->string('thumbnail');
            $table->string('url_video');
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
        Schema::dropIfExists('episodes');
    }
}
