<?php

namespace App\Modules\BasicSite\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
	protected $fillable = ['phone', 'email', 'subject'];
}
