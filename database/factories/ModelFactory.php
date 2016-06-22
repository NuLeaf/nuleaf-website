<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Event::class, function (Faker\Generator $faker)
{
  return [
    'title'      => $faker->unique()->sentence,
    'date'       => $faker->dateTimeBetween('-1 year', 'now'),
    'location'   => $faker->streetAddress
  ];
});

$factory->define(App\Steminar::class, function (Faker\Generator $faker)
{
  return [
    'title'      => $faker->unique()->sentence,
    'date'       => $faker->dateTimeBetween('-1 year', 'now'),
    'location'   => $faker->streetAddress,
    'body'       => $faker->text
  ];
});

$factory->define(App\Team::class, function (Faker\Generator $faker)
{
  return [
    'team_name' => $faker->unique()->colorName,
  ];
});

$factory->define(App\User::class, function (Faker\Generator $faker)
{
  return [
    'username'    => $faker->unique()->userName,
    'password'    => bcrypt('root'),
    'email'       => $faker->unique()->safeEmail,
    'firstname'   => $faker->firstName,
    'lastname'    => $faker->lastName,
    'image1'      => $faker->unique()->imageUrl(250, 250, 'cats'),
    'image2'      => $faker->unique()->imageUrl(250, 250, 'cats'),
    'description' => $faker->text
  ];
});
