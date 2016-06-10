<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRoleUserTable extends Migration
{
  private $admin_role_id;
  private $editor_role_id;
  private $user_id;

  function __construct()
  {
    $this->admin_role_id = DB::table('roles')->where('role_name', 'admin')->pluck('role_id')[0];
    $this->user_id = DB::table('users')->where('username', env('ADMIN_USERNAME', 'root'))->pluck('user_id')[0];
  }

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::table('role_user')->insert([
      [
        'role_id' => $this->admin_role_id,
        'user_id' => $this->user_id
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
      ->where('user_id', $this->user_id)
      ->where('role_id', $this->admin_role_id)
      ->delete();
  }
}
