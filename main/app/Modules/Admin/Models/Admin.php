<?php

namespace App\Modules\Admin\Models;

use App\User;
use Illuminate\Database\Eloquent\Builder;

class Admin extends User
{
	protected $fillable = [];
	protected $table = "users";
	const DASHBOARD_ROUTE_PREFIX = 'moses-guy';

	static function canAccess()
	{
		return parent::isAdmin();
	}

	/**
	 * The booting method of the model
	 *
	 * @return void
	 */
	protected static function boot()
	{
		parent::boot();

		static::addGlobalScope('adminsOnly', function (Builder $builder) {
			$builder->where('role_id', parent::$admin_id);
		});
	}
}
