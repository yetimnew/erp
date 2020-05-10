<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Personale;
use Faker\Generator as Faker;

$factory->define(App\Hrm\Personale::class, function (Faker $faker) {
    // $values = array();
    return [
        'personalesid' =>  $faker->unixTime($max = 'now')  ,
        'firstname'  => $faker->firstName($gender = null|'male'|'female'),
        'fathername'  => $faker->firstName($gender = null|'male'|'female'),
        'gfathername'  => $faker->firstName($gender = null|'male'|'female'),
        'sex'  => $faker->boolean,
        'birthdate'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'zone'  => $faker->city,
        'woreda'  => $faker->city,
        'kebele'  => $faker->buildingNumber,
        'housenumber'  => $faker->buildingNumber,
        'mobile'  => $faker->e164PhoneNumber,
        'hireddate'  => $faker->date($format = 'Y-m-d', $max = 'now'),
        'department_id'  => $faker->numberBetween($min = 1, $max = 3),
        'job_id'  => $faker->numberBetween($min = 1, $max = 3),
        'image'  => 'images\avatar.jpg',
        'user_id'  => 1,
        'about'  => $faker->word,
        'status'  => 1
    ];
});
