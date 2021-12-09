<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentaires(){
        return $this->hasMany(Comment::class);
    }
}