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
		DB::table('users')->insert([
			'full_name' => 'Mitchell Howell Christensen',
			'role_id' => 2,
			'email' => 'grant@amju.com',
			'verified_at' => '2019-04-26 07:56:11',
			'phone' => '378809875463456',
			'address' => 'ktjyhgjhkjk',
			'dob' => now()->subYears(20),
			'gender' => 'male',
			'bvn' => '2345678900078654',
			'acc_type' => 'others',
			'user_passport' => 'ktjyhgjhkjk',
		]);

		factory(AppUser::class, 10)->create();
	}
}
