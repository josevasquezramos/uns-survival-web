<?php

namespace App\Models\Minecraft;

use Illuminate\Database\Eloquent\Model;

class ZstatsStat extends Model
{
    protected $table = 'zstats_stats';
    public $timestamps = false;
    
    protected $fillable = [
        'uuid', 'stat', 'val'
    ];
}