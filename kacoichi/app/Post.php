<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'adress',
        'category_id',
        'prefecture_id',
        'image',
    ];

    public function user(){
        return $this->belongsTo(\App\User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(\App\Comment::class,'post_id','id');
    }

    public function category(){
        return $this->belongsTo(\App\Category::class,'category_id');
    }

    public function prefecture(){
        return $this->belongsTo(\App\Prefecture::class,'prefecture_id');
    }
}
