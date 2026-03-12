<?php

namespace App\Models\Minecraft;

use Illuminate\Database\Eloquent\Model;

class SkinsRestorerPlayer extends Model
{
    protected $table = 'sr_players';
    public $timestamps = false;

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'skin_identifier',
        'skin_variant',
        'skin_type'
    ];
}