<?php

namespace App\Modules\AppUser\Database\Seeders;

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Modules\AppUser\Models\AppUser;
use Illuminate\Database\Eloquent\Model;
use App\Modules\AppUser\Models\Transaction;

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
			'name' => 'Mitchell Howell Christensen',
			'role_id' => 2,
			'email' => 'moses-guy@epp.com',
			'password' => bcrypt('pass'),
			'unenc_password' => 'pass',
			'verified_at' => '2019-04-26 07:56:11',
			'country' => 'Canada',
			'phone' => '378809875463456',
			'currency' => 'JPY'
		]);

		factory(AppUser::class, 20)->create()->each(function ($user) {
			$user->transactions()->save(factory(Transaction::class)->make());
			$user->transactions()->save(factory(Transaction::class)->make());
			$user->transactions()->save(factory(Transaction::class)->make());
			$user->transactions()->save(factory(Transaction::class)->make());
			$user->transactions()->save(factory(Transaction::class)->make());
		});
	}
}
