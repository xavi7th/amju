<?php

namespace App\Modules\BasicSite\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Modules\BasicSite\Models\TeamMember;
use App\Modules\BasicSite\Models\Testimonial;

class BasicSiteDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();


		$this->call(UsersTableSeeder::class);
		$this->call(TestimonialsTableSeeder::class);
		$this->call(TeamMemberTableSeeder::class);
	}
}


class TestimonialsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		factory(Testimonial::class, 16)->create();
	}
}

class TeamMemberTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		factory(TeamMember::class, 5)->create();
	}
}
