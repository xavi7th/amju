<?php

use App\User;
use Faker\Generator as Faker;
use App\Modules\AppUser\Models\AppUser;
use App\Modules\AppUser\Models\Transaction;

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

$factory->define(Transaction::class, function (Faker $faker) {
	$users = AppUser::all();
	return [
		'user_id' => $faker->randomElement($users)->id,
		'trans_type' => $faker->randomElement(['deposit', 'profit', 'withdrawal', 'deposit', 'deposit']),
		'amount' => $faker->randomFloat(2, 200.78, 20000.00),
		'trans_date' => now()->subDays(rand(2, 34)),
	];
});
