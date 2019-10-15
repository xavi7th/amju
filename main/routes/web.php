<?php
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('artisan/migrate', function (Request $request) {
	$ret = Artisan::call('migrate:fresh', array('--force' => true));
	$ret2 = Artisan::call('module:seed');
	return ['message' => 'Migration successful', 'result' => [$ret, $ret2]];
});
Route::get('artisan/migrate-rollback', function (Request $request) {
	$ret = Artisan::call('migrate:rollback', array());
	return ['message' => 'Migration successful', 'result' => $ret];
});


Route::get('artisan/storage-link', function (Request $request) {
	$ret = Artisan::call('storage:link', array());
	return ['message' => 'Migration successful', 'result' => $ret];
});
