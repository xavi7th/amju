<?php

use App\User;
use Faker\Generator as Faker;
use App\Modules\AppUser\Models\AppUser;

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
		'name' => $faker->name,
		'role_id' => User::getAppUserId(),
		'email' => $faker->unique()->safeEmail,
		'password' => 'pass',
		'country' => $faker->country,
		'phone' => $faker->phoneNumber,
		'currency' => $faker->currencyCode,
		'id_card' => '/storage/id_cards/' . $faker->file(public_path('img/team/'), public_path('storage/id_cards/'), false),
		// 'unenc_password' => 'Pass@1',
	];
});
