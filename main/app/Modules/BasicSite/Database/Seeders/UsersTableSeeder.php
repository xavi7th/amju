<?php

namespace App\Modules\BasicSite\Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Modules\BasicSite\Models\AppUser;


class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(AppUser::class, 10)->create();
	}
}
