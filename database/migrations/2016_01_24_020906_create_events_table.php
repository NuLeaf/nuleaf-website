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
      // $table->integer('user_id')->unsigned()->nullable();
      // $table->foreign('user_id')
      //       ->references('user_id')->on('users')
      //       ->onDelete('cascade')
      //       ->onUpdate('cascade');
      $table->string('title', 100)->unique();
      $table->dateTime('date');
      $table->string('location', 100);
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
