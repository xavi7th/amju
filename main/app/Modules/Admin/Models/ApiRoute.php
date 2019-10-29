<?php

namespace App\Modules\Admin\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ApiRoute extends Model
{
	protected $fillable = [];

	public function permitted_users()
	{
		return $this->belongsToMany(User::class, 'api_route_permissions');
	}
}
