<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTableInsertAdmin extends Migration
{
  private $admin_role_id;
  private $admin_id;
  
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::table('users')->insert([
      'username'  => env('ADMIN_USERNAME', 'root'),
      'password'  => bcrypt(env('ADMIN_PASSWORD', 'root')),
      'email'     => env('ADMIN_EMAIL', 'root@email.com'),
      'firstname' => 'root',
      'lastname'  => 'admin'
    ]);

    $this->admin_role_id = DB::table('roles')->where('role_name', 'admin')->pluck('role_id')[0];
    $this->admin_id = DB::table('users')->where('username', env('ADMIN_USERNAME', 'root'))->pluck('user_id')[0];

    DB::table('role_user')->insert([
      [
        'role_id' => $this->admin_role_id,
        'user_id' => $this->admin_id
      ]
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    DB::table('role_user')
      ->where('user_id', $this->admin_id)
      ->where('role_id', $this->admin_role_id)
      ->delete();

    DB::table('users')->where('username', env('ADMIN_USERNAME', 'root'))->delete();
  }
}
