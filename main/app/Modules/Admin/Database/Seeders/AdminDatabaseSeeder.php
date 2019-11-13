<?php

namespace App\Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Modules\Admin\Models\Admin;
use App\Modules\Admin\Models\ApiRoute;
use Illuminate\Database\Eloquent\Model;

class AdminDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call(ApiRoutesTableSeeder::class);
	}
}


class ApiRoutesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		ApiRoute::create([
			'path' => Admin::DASHBOARD_ROUTE_PREFIX,
			'name' => 'admin.root',
			'meta' => '{title: APP_NAME,}'
		]);
	}
}
