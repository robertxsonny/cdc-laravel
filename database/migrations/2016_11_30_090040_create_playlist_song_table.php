<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaylistSongTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('playlist_song', function (Blueprint $table) {
          $table->integer('playlist_id')->unsigned()->index();
          $table->foreign('playlist_id')->references('id')->on('playlists')->onDelete('cascade');

          $table->integer('song_id')->unsigned()->index();
          $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');

          $table->integer('order');
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
      Schema::drop('playlists');
  }
}
