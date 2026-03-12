<?php

namespace App\Models\Minecraft;

use Illuminate\Database\Eloquent\Model;

class LuckpermsPlayer extends Model
{
    protected $table = 'luckperms_players';
    public $timestamps = false;

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';

    protected $fillable = [
        'uuid',
        'username',
        'primary_group'
    ];
}