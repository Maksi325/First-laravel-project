<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        //hasOne , hasMany , belongsTo , belongsToMany
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        //hasOne , hasMany , belongsTo , belongsToMany
        return $this->belongsTo(Post::class);
    }
}
