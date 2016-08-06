<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('events', function (Blueprint $table)
    {
      $table->increments('event_id');
      $table->string('title', 128);
      $table->dateTime('date')->nullable()->default(null);
      $table->string('location', 128)->nullable()->default('');
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
    Schema::drop('events');
  }
}
