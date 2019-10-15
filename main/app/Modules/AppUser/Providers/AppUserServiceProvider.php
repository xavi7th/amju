<?php

namespace App\Modules\AppUser\Providers;

use Illuminate\Auth\SessionGuard;
use Illuminate\Support\Facades\Auth;
use App\Modules\AppUser\Models\AppUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use App\Modules\AppUser\Http\Middleware\OnlyAppUsers;
use App\Modules\AppUser\Http\Middleware\OnlyVerifiedUsers;

class AppUserServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Boot the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerTranslations();
		$this->registerConfig();
		$this->registerViews();
		$this->registerFactories();
		$this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

		/**** Register the modules middlewares *****/
		app()->make('router')->aliasMiddleware('appusers', OnlyAppUsers::class);
		app()->make('router')->aliasMiddleware('verified_users', OnlyVerifiedUsers::class);
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		SessionGuard::macro('appuser', function () {
			return AppUser::find(Auth::id());
		});
	}

	/**
	 * Register config.
	 *
	 * @return void
	 */
	protected function registerConfig()
	{
		$this->publishes([
			__DIR__ . '/../Config/config.php' => config_path('appuser.php'),
		], 'config');
		$this->mergeConfigFrom(
			__DIR__ . '/../Config/config.php',
			'appuser'
		);
	}

	/**
	 * Register views.
	 *
	 * @return void
	 */
	public function registerViews()
	{
		$viewPath = resource_path('views/modules/appuser');

		$sourcePath = __DIR__ . '/../Resources/views';

		$this->publishes([
			$sourcePath => $viewPath
		], 'views');

		$this->loadViewsFrom(array_merge(array_map(function ($path) {
			return $path . '/modules/appuser';
		}, \Config::get('view.paths')), [$sourcePath]), 'appuser');
	}

	/**
	 * Register translations.
	 *
	 * @return void
	 */
	public function registerTranslations()
	{
		$langPath = resource_path('lang/modules/appuser');

		if (is_dir($langPath)) {
			$this->loadTranslationsFrom($langPath, 'appuser');
		} else {
			$this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'appuser');
		}
	}

	/**
	 * Register an additional directory of factories.
	 *
	 * @return void
	 */
	public function registerFactories()
	{
		if (!app()->environment('production')) {
			app(Factory::class)->load(__DIR__ . '/../Database/factories');
		}
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}
}
