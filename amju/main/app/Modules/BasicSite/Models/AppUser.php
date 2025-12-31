<?php

namespace App\Modules\BasicSite\Models;

use App\User;
use Illuminate\Database\Eloquent\Builder;

class AppUser extends User
{
	protected $fillable = [
		'full_name', 'email', 'phone', 'bvn', 'user_passport', 'gender', 'acc_type', 'address', 'dob', 'acc_num'
	];

	protected $table = "users";

	protected $dates = ['dob'];

	const DASHBOARD_ROUTE_PREFIX = "user";

	static function canAccess()
	{
		return parent::isAppUser();
	}

	public function is_verified()
	{
		return $this->verified_at !== null;
	}

	/**
	 * The booting method of the model
	 *
	 * @return void
	 */
	// protected static function boot()
	// {
	// 	parent::boot();

	// 	static::addGlobalScope('appUsersOnly', function (Builder $builder) {
	// 		$builder->where('role_id', parent::$app_user_id);
	// 	});
	// }
}
