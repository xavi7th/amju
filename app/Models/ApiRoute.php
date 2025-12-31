<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiRoute extends Model
{
    protected $fillable = [
        'path', 'name', 'meta', 'description'
    ];

    public function permitted_users()
    {
        return $this->belongsToMany(User::class, 'api_route_permissions', 'api_route_id', 'user_id')->withTimestamps();
    }
}
