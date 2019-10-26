<?php

namespace App\Modules\BasicSite\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
	protected $fillable = [
		'name',
		'city',
		'country',
		'img',
		'testimonial',
	];
}
