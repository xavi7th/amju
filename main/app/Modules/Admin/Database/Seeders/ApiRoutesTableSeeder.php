<?php
namespace App\Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;

class ApiRoutesTableSeeder extends Seeder
{

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{


		\DB::table('api_routes')->delete();

		\DB::table('api_routes')->insert(array(
			0 =>
			array(
				'path' => '/',
				'name' => 'admin.root',
				'meta' => '{title: APP_NAME + \' | Dashboard\',
iconClass: \'home\',
menuName: \'Dashboard\'}',
			),
			1 =>
			array(
				'path' => '/account/requests',
				'name' => 'admin.account.requests',
				'meta' => '',
			),
			2 =>
			array(
				'path' => '/manage-ui/testimonials',
				'name' => 'admin.ui.testimonials',
				'meta' => '{title: APP_NAME + \' | Manage Testimonials\',
iconClass: \'home\',
menuName: \'Manage Testimonials\'}',
			),
			3 =>
			array(
				'path' => '/manage-ui/faqs',
				'name' => 'admin.ui.faqs',
				'meta' => '{title: APP_NAME + \' | Manage FAQs\',
iconClass: \'home\',
menuName: \'Manage FAQs\'}',
			),
			4 =>
			array(
				'path' => '/manage-ui/slides',
				'name' => 'admin.ui.slides',
				'meta' => '{title: APP_NAME + \' | Manage Slideshow\',
iconClass: \'home\',
menuName: \'Manage Slideshow\'
}',
			),
			5 =>
			array(
				'path' => '/manage-ui/highlights',
				'name' => 'admin.ui.highlights',
				'meta' => '{title: APP_NAME + \' | Manage Highlights\',
iconClass: \'home\',
menuName: \'Manage Highlights\'
}',
			),
			6 =>
			array(
				'path' => '/manage-media/video',
				'name' => 'admin.media.video',
				'meta' => '{title: APP_NAME + \' | Manage Videos\',
iconClass: \'home\',
menuName: \'Manage Videos\'
}',
			),
			7 =>
			array(
				'path' => '/manage-media/news',
				'name' => 'admin.media.news',
				'meta' => '{title: APP_NAME + \' | Manage News\',
iconClass: \'home\',
menuName: \'Manage News\'
}',
			),
			8 =>
			array(
				'path' => '/manage-media/gallery',
				'name' => 'admin.media.gallery',
				'meta' => '{title: APP_NAME + \' | Manage Gallery\',
iconClass: \'home\',
menuName: \'Manage Gallery\'
}',
			),
			9 =>
			array(
				'path' => '/account/requests',
				'name' => 'admin.account.requests',
				'meta' => '{title: APP_NAME + \' | New Account Requests\',
iconClass: \'home\',
menuName: \'New Account Requests\'
}',
			),
			10 =>
			array(
				'path' => '/vacancies',
				'name' => 'admin.vacancies',
				'meta' => '{title: APP_NAME + \' | Vacancies\',
iconClass: \'home\',
menuName: \'Vacancies\'
}',
			),
			11 =>
			array(
				'path' => '/logs/auth-attempts',
				'name' => 'admin.logs.auth',
				'meta' => '{title: APP_NAME + \' | Auth Logs\',
iconClass: \'home\',
menuName: \'Auth Logs\'
}',
			),
			12 =>
			array(
				'path' => '/admins',
				'name' => 'admin.admins.view',
				'meta' => '{title: APP_NAME + \' | View Admins\',
iconClass: \'home\',
menuName: \'View Admins\'
}',
			),
			13 =>
			array(
				'path' => '/messages',
				'name' => 'admin.messages',
				'meta' => '{title: APP_NAME + \' | Messages\',
iconClass: \'home\',
menuName: \'Messages\'
}',
			),
			14 =>
			array(
				'path' => '/admins/:id/route-permissions',
				'name' => 'admin.admins.permissions',
				'meta' => '{title: APP_NAME + \' | View Admin Permissions\',
iconClass: \'home\',
menuName: \'View Admin Permission\',
skip: true
}',
			),
		));
	}
}
