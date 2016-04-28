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
      DB::table('users')->insert([
        'username' => 'test',
        'password' => bcrypt('test'),
        'email'    => 'test@example.com',
        'firstname' => 'test',
        'lastname'  => 'test',
      ]);

      factory(App\Event::class, 1000)->create();
      factory(App\Steminar::class, 1000)->create();
      factory(App\Team::class, 100)->create();
    }
}
