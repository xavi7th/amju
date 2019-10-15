<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalRequestsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdrawal_requests', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('app_user_id')->unsigned();
			$table->double('amount')->nullable();
			$table->string('payment_option')->nullable();
			$table->string('bitcoin_acc')->nullable();
			$table->string('receiver_name')->nullable();
			$table->string('secret_question')->nullable();
			$table->string('secret_answer')->nullable();
			$table->string('id_type')->nullable();
			$table->string('country')->nullable();
			$table->string('acc_name')->nullable();
			$table->string('acc_num')->nullable();
			$table->string('acc_bank')->nullable();

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('withdrawal_requests');
	}
}
