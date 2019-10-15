<?php

namespace App\Modules\AppUser\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
	protected $fillable = [
		'name', 'position', 'img'
	];
}
