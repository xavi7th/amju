<?php

namespace App\Modules\AppUser\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\AppUser\Models\TeamMember;
use Illuminate\Database\Eloquent\Model;
use App\Modules\AppUser\Models\Testimonial;
use App\Modules\AppUser\Database\Seeders\UsersTableSeeder;

class AppUserDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call(UsersTableSeeder::class);
		// $this->call(TestimonialsTableSeeder::class);
		// $this->call(TeamMemberTableSeeder::class);
	}
}
