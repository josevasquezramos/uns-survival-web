<?php

namespace App\Models\Minecraft;

use Illuminate\Database\Eloquent\Model;

class Xconomy extends Model
{
    protected $table = 'xconomy';
    public $timestamps = false;

    protected $primaryKey = 'UID';
    protected $keyType = 'string';

    protected $fillable = [
        'UID',
        'player',
        'balance',
        'hidden'
    ];
}