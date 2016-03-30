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
    'title'    => $faker->unique()->sentence,
    'date'     => $faker->dateTimeBetween('-1 year', '2017-01-01 00:00:00'),
    'location' => $faker->address,
  ];
});

$factory->define(App\Steminar::class, function (Faker\Generator $faker)
{
  return [
    'title'    => $faker->unique()->sentence,
    'date'     => $faker->dateTimeBetween('-1 year', '2017-01-01 00:00:00'),
    'location' => $faker->address,
    'body'     => $faker->text
  ];
});

$factory->define(App\Team::class, function (Faker\Generator $faker)
{
  return [
    'team_name' => $faker->unique()->colorName,
  ];
});
