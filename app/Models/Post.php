<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        //hasOne , hasMany , belongsTo , belongsToMany
        return $this->BelongsTo(Category::class);
    }

    public function user()
    {
        //hasOne , hasMany , belongsTo , belongsToMany
        return $this->BelongsTo(User::class);
    }

    public function comment()
    {
        //hasOne , hasMany , belongsTo , belongsToMany
        return $this->hasMany(Comment::class);
    }
}
