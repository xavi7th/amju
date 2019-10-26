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
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('phone')->unique();
			$table->string('bvn')->nullable()->unique();
			$table->string('user_passport');
			$table->string('gender')->enum(['male', 'female']);
			$table->string('acc_type');
			$table->string('acc_num')->nullable();
			$table->string('address');
			$table->date('dob');
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
