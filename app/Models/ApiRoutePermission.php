<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiRoutePermission extends Model
{
    protected $table = 'api_route_permissions';
    protected $fillable = ['user_id', 'api_route_id'];
}
