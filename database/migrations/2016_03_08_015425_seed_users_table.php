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
      'username' => env('ADMIN_USERNAME', 'root'),
      'password' => bcrypt(env('ADMIN_PASSWORD', 'root')),
      'email'    => env('ADMIN_EMAIL', 'root@email.com'),
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
    DB::table('users')->where('username', env('ADMIN_USERNAME', 'root'))->delete();
  }
}
