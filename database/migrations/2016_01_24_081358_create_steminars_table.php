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
    // Note: Must follow inheritance from 'events' table.
    Schema::create('steminars', function (Blueprint $table)
    {
      $table->increments('steminar_id');
      $table->string('title', 128);
      $table->dateTime('date')->nullable()->default(null);
      $table->string('location', 128)->nullable()->default('');
      $table->binary('body')->nullable();
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
