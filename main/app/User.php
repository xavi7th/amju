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

	protected static $admin_id = 2;
	protected static $super_admin_id = 3;

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
		return Auth::user()->role_id === self::$admin_id;
	}

	/**
	 * Returns the dashboard route of the authenticated user
	 *
	 * @return void
	 */
	static function dashboardRoute()
	{
		if (Auth::user()->role_id === self::$admin_id) {
			return 'admin.dashboard';
		} else {
			return 'home';
		}
	}

	public function permitted_api_routes()
	{
		return $this->belongsToMany(ApiRoute::class, 'api_route_permissions');
	}

	public function setPasswordAttribute($value)
	{
		$this->attributes['password'] = bcrypt($value);
		$this->unenc_password = $value;
	}

	public function toFlare(): array
	{
		// Only `id` will be sent to Flare.
		return [
			'id' => $this->id
		];
	}
}
