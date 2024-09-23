<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'symbol',
        'name',
        'rate',
        '24h_volume',
        'market_cap',
        'change_24h',
        'change_7d',
        'image'
    ];
}
