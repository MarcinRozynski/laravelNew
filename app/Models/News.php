<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public const table = 'news';
    public const id = 'id';
    public const title = 'title';
    public const text = 'text';
    

    protected $fillable = [
        self::id,
        self::title,
        self::text
    ];

    public function newUsers()
    {   
        return $this->hasMany(User::class);
    }

    public const RELATION_USERS = 'users';

    public $timestamps = true;


    public function user()
    {
        return $this->belongsToMany(User::table, NewsUser::table,  NewsUser::news_id, NewsUser::user_id);
    }

}
