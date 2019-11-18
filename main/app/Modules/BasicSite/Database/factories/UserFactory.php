<?php

use App\User;
use Faker\Generator as Faker;
use App\Modules\BasicSite\Models\AppUser;



/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(AppUser::class, function (Faker $faker) {
	return [
		'full_name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'phone' => $faker->phoneNumber,
		'address' => $faker->address,
		'dob' => $faker->date(),
		'gender' => $faker->randomElement(['male', 'female']),
		'bvn' => $faker->randomNumber(9),
		'acc_type' => $faker->randomElement(['amjuflex', 'current', 'corporate']),
		'user_passport' => '/storage/user_passports/' . $faker->file(public_path('img/team/'), public_path('storage/user_passports/'), false),
	];
});
