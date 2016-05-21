<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Event::class, 1000)->create();
      factory(App\Steminar::class, 1000)->create();
      factory(App\Team::class, 100)->create();
      factory(App\User::class, 100)->create();
    }
}
