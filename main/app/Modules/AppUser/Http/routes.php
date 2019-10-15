<?php

use App\Modules\AppUser\Http\Controllers\AppUserController;

Route::group(['middleware' => 'web', 'namespace' => 'App\Modules\AppUser\Http\Controllers'], function(){
  AppUserController::routes();	
});
