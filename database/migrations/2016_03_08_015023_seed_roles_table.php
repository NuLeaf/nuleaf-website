<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedRolesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    DB::table('roles')->insert([
      ['role_name' => 'admin'],
      ['role_name' => 'editor']
    ]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    DB::table('roles')->where('role_name', 'admin')->delete();
    DB::table('roles')->where('role_name', 'editor')->delete();
  }
}
