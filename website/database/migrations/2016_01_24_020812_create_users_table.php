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
      $table->string('username', 128)->unique();
      $table->string('email', 128)->unique();
      $table->string('password', 128);
      $table->string('firstname', 64);
      $table->string('lastname', 64);

      $table->string('image1', 256)->nullable()->default('');
      $table->string('image2', 256)->nullable()->default('');
      $table->longText('description')->nullable()->default('');

      $table->boolean('is_active')->default(true);
      
      $table->integer('team_id')->unsigned()->nullable()->default(null);
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
