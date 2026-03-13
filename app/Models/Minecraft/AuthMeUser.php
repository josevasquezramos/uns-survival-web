<?php

namespace App\Models\Minecraft;

use App\Models\Order;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthMeUser extends Authenticatable
{
    protected $table = 'authme';

    public $timestamps = false;

    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'realname',
        'name',
        'password',
        'ip',
        'lastlogin',
        'x',
        'y',
        'z',
        'world',
        'regdate',
        'regip',
        'yaw',
        'pitch',
        'email',
        'isLogged',
        'hasSession',
        'totp'
    ];

    protected $hidden = [
        'password',
        'totp',
        'remember_token',
    ];

    public function getNameAttribute($value)
    {
        return $value ?? $this->username;
    }

    public function economy()
    {
        return $this->hasOne(Xconomy::class, 'player', 'realname');
    }

    public function rank()
    {
        return $this->hasOne(LuckpermsPlayer::class, 'username', 'realname');
    }

    public function purchases()
    {
        return $this->hasMany(Order::class, 'buyer_id');
    }

    public function giftsReceived()
    {
        return $this->hasMany(Order::class, 'target_id');
    }

    public function skinInfo()
    {
        return $this->hasOne(SkinsRestorerPlayer::class, 'skin_identifier', 'realname');
    }

    public function getStatsAttribute()
    {
        if (!$this->rank || !$this->rank->uuid) {
            return collect();
        }
        return ZstatsStat::where('uuid', $this->rank->uuid)
            ->pluck('val', 'stat');
    }

    public function getSkinUrlAttribute()
    {
        $skinName = $this->realname;
        if ($this->rank && $this->rank->uuid) {
            $srPlayer = \App\Models\Minecraft\SkinsRestorerPlayer::where('uuid', $this->rank->uuid)->first();

            if ($srPlayer && $srPlayer->skin_identifier) {
                $skinName = $srPlayer->skin_identifier;
            }
        }
        if (str_starts_with(strtolower($skinName), 'sr-') || str_contains($skinName, 'http')) {
            $skinName = $this->realname;
        }
        $cleanSkinName = ltrim($skinName, '.');
        return "https://minotar.net/helm/" . urlencode($cleanSkinName) . "/80.png";
    }

    public function getRankNameAttribute()
    {
        if (!$this->rank || !$this->rank->uuid) return 'default';

        $groupPerm = \Illuminate\Support\Facades\DB::table('luckperms_user_permissions')
            ->where('uuid', $this->rank->uuid)
            ->where('permission', 'LIKE', 'group.%')
            ->where('permission', '!=', 'group.default')
            ->first();

        if ($groupPerm) {
            return str_replace('group.', '', $groupPerm->permission);
        }

        return $this->rank->primary_group ?? 'default';
    }

    public function getHtmlPrefixAttribute()
    {
        $group = $this->rank_name;

        $perm = \Illuminate\Support\Facades\DB::table('luckperms_group_permissions')
            ->where('name', $group)
            ->where('permission', 'LIKE', 'prefix.%')
            ->orderByRaw("CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(permission, '.', 2), '.', -1) AS UNSIGNED) DESC")
            ->first();

        if (!$perm)
            return '';

        $parts = explode('.', $perm->permission, 3);
        $prefix = $parts[2] ?? '';

        $prefix = preg_replace('/&#([a-fA-F0-9]{6})/', '<span style="color: #$1;">', $prefix);

        $prefix = str_replace('&l', '<span style="font-weight: bold;">', $prefix);
        $prefix = str_replace('&o', '<span style="font-style: italic;">', $prefix);
        $prefix = str_replace('&n', '<span style="text-decoration: underline;">', $prefix);
        $prefix = str_replace('&m', '<span style="text-decoration: line-through;">', $prefix);

        $colors = [
            '0' => '#000000',
            '1' => '#0000AA',
            '2' => '#00AA00',
            '3' => '#00AAAA',
            '4' => '#AA0000',
            '5' => '#AA00AA',
            '6' => '#FFAA00',
            '7' => '#AAAAAA',
            '8' => '#555555',
            '9' => '#5555FF',
            'a' => '#55FF55',
            'b' => '#55FFFF',
            'c' => '#FF5555',
            'd' => '#FF55FF',
            'e' => '#FFFF55',
            'f' => '#FFFFFF',
        ];
        foreach ($colors as $code => $hex) {
            $prefix = str_replace('&' . $code, '<span style="color: ' . $hex . ';">', $prefix);
        }

        $prefix = str_replace('&r', '', $prefix);

        $openSpans = substr_count($prefix, '<span');
        $prefix .= str_repeat('</span>', $openSpans);

        return $prefix;
    }
}