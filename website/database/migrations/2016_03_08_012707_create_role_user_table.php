<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleUserTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('role_user', function(Blueprint $table)
    {
      $table->integer('role_id')->unsigned();
      $table->foreign('role_id')
            ->references('role_id')->on('roles')
            ->onUpdate('cascade')
            ->onDelete('cascade');

      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
            ->references('user_id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('role_user');
  }
}
