<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table)
    {
      $table->increments('user_id');
      $table->string('username')->unique();
      $table->string('email')->unique();
      $table->string('password', 60);
      $table->string('firstname', 75);
      $table->string('lastname', 75);

      $table->string('image1')->nullable();
      $table->string('image2')->nullable();
      $table->longText('description')->nullable();

      $table->integer('team_id')->unsigned()->nullable();
      $table->foreign('team_id')->references('team_id')->on('teams');
      
      $table->rememberToken();
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
    Schema::drop('users');
  }
}
