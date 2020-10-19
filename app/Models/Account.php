<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Account extends Model
{
    use HasFactory;

    public static function findUser($user_id)
    {
        return static::where('user_id', $user_id)->first();
    }

    protected $fillable = [
        'balance',
    ];
}
