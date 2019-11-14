<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('role_id')->unsigned()->nullable();
			$table->string('full_name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('phone')->unique();
			$table->string('bvn')->nullable()->unique();
			$table->string('user_passport');
			$table->string('gender')->enum(['male', 'female']);
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
		Schema::dropIfExists('admins');
	}
}
