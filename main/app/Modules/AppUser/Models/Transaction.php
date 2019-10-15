<?php

namespace App\Modules\AppUser\Models;

use App\Modules\AppUser\Models\AppUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'amount', 'trans_type', 'investment_plan', 'trans_date',
	];
	protected $dates = ['trans_date'];

	public function user()
	{
		return $this->belongsTo(AppUser::class, 'user_id');
	}
}
