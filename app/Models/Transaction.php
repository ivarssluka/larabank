<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'contact_id',
        'type',
        'from_account',
        'to_account',
        'from_currency',
        'amount_sent',
        'to_currency',
        'amount_received',
        'exchange_rate',
    ];
}
