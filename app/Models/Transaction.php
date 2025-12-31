<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'trans_type',
        'investment_plan',
        'trans_date',
        'description',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'trans_date' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
