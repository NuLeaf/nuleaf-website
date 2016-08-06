<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterSteminarsAddImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('steminars', function(Blueprint $table)
      {
        $table->string('image', 256)->nullable()->default('');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('steminars', function(Blueprint $table)
      {
        $table->dropColumn('image');
      });
    }
}
