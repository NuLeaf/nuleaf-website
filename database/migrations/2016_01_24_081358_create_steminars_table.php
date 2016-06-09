<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSteminarsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('steminars', function (Blueprint $table) {
      $table->increments('steminar_id');
      $table->string('title', 100);
      $table->dateTime('date');
      $table->string('location', 100);
      $table->binary('body');
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
    Schema::drop('steminars');
  }
}
