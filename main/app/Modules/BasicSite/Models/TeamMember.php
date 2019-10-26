<?php

namespace App\Modules\BasicSite\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
	protected $fillable = [
		'name', 'position', 'img'
	];
}
