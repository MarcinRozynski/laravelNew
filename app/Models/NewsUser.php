<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsUser extends Model 
{
    public const table = 'news_users';

    public const user_id = 'user_id';
    public const news_id = 'news_id';

    protected $fillable = [
        self::user_id,
        self::news_id,
    ];
}