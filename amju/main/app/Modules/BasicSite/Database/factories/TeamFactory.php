<?php

use Faker\Generator as Faker;
use App\Modules\BasicSite\Models\TeamMember;



$factory->define(TeamMember::class, function (Faker $faker) {
	return [
		'name' => $faker->name,
		'position' => $faker->jobTitle,
		'img' => '/storage/team_images/' . $faker->file(public_path('img/team/'), public_path('storage/team_images/'), false),
	];
});
