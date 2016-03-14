<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::table('users')->insert([
      'username' => env('ROOT_USERNAME', 'root'),
      'password' => bcrypt(env('ROOT_PASSWORD', 'password')),
      'email'    => env('ROOT_EMAIL', 'root@example.com'),
      'firstname'   => 'root',
      'lastname'    => 'admin'
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    DB::table('users')->where('username', 'root')->delete();
  }
}
