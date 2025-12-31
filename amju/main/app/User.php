<?php

namespace App;

use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\Admin\Models\ApiRoute;

class User extends Authenticatable
{
	use Notifiable, SoftDeletes;

	protected static $admin_id = 1;
	protected static $super_admin_id = 2;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'email', 'password', 'unenc_password', 'currency', 'country', 'phone', 'id_card'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'password', 'remember_token',
	];

	protected $casts = [
		'role_id' => 'integer',
		'bvn' => 'integer'
	];

	/**
	 * Returns the role id of the admin user
	 *
	 * @return void
	 */
	static function getAdminId()
	{
		return self::$admin_id;
	}

	/**
	 * Check if the currently authenticated user is an admin
	 *
	 * @return void
	 */
	protected static function isAdmin()
	{
		return Auth::admin() ? true : false;
	}

	/**
	 * Returns the dashboard route of the authenticated user
	 *
	 * @return void
	 */
	static function dashboardRoute()
	{
		if (Auth::admin()) {
			return 'admin.dashboard';
		} else {
			return 'home';
		}
	}

	public function permitted_api_routes()
	{
		return $this->belongsToMany(ApiRoute::class, 'api_route_permissions', 'user_id')->withTimestamps();
	}

	public function toFlare(): array
	{
		// Only `id` will be sent to Flare.
		return [
			'id' => $this->id
		];
	}
}
