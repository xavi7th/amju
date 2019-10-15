<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('role_id')->unsigned()->default(User::getAppUserId());
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('unenc_password');
			$table->string('phone');
			$table->string('country');
			$table->string('currency');
			$table->string('id_card')->nullable();
			$table->timestamp('verified_at')->nullable();
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}
}
