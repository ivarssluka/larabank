<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'symbol',
        'name',
        'current_price',
        'bought_at',
        'amount_bought',
        'current_value',
        'change_24h',
        'change_7d',
        'change_30d',
        'change_total',
    ];
}
