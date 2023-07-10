<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function scopeActive($query) {
        return $query->where('active', true);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
