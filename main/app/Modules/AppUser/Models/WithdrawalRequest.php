<?php

namespace App\Modules\AppUser\Models;

use App\Modules\AppUser\Models\AppUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WithdrawalRequest extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'app_user_id', 'payment_option', 'bitcoin_acc', 'receiver_name',
		'secret_question', 'secret_answer', 'id_type', 'country', 'acc_name',
		'acc_num', 'acc_bank', 'amount'
	];

	public function app_user()
	{
		return $this->belongsTo(AppUser::class);
	}
}
