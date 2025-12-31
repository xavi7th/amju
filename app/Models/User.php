<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    protected static $admin_id = 1;
    protected static $super_admin_id = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'unenc_password',
        'currency',
        'country',
        'phone',
        'id_card',
        'role_id',
        'bvn',
        'verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'verified_at' => 'datetime',
            'password' => 'hashed',
            'role_id' => 'integer',
            'bvn' => 'integer'
        ];
    }

    /**
     * Returns the role id of the admin user
     */
    static function getAdminId()
    {
        return self::$admin_id;
    }

    /**
     * Check if the currently authenticated user is an admin
     */
    protected static function isAdmin()
    {
        return Auth::guard('admin')->check();
    }

    /**
     * Returns the dashboard route of the authenticated user
     */
    static function dashboardRoute()
    {
        if (Auth::guard('admin')->check()) {
            return 'admin.dashboard';
        } else {
            return 'home';
        }
    }

    public function permitted_api_routes()
    {
        return $this->belongsToMany(ApiRoute::class, 'api_route_permissions', 'user_id')->withTimestamps();
    }
}
