<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends User
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'full_name',
        'email',
        'password',
        'phone',
        'bvn',
        'user_passport',
        'gender',
        'address',
        'dob',
        'verified_at'
    ];

    protected $table = 'admins';

    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'dob' => 'date',
        ]);
    }

    public function is_verified()
    {
        return $this->verified_at !== null;
    }
}
