<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [

        'nom',
        'mail',
        'comment',
        'post_id',
        'comment_id',
        
    ];

    protected $dates = ['deleted_at'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentaires(){
        return $this->hasMany(Comment::class, 'comment_id', 'id');
    }

    // /**
    //  * Get all of the comments for the Comment
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function comments(): HasMany
    // {
    //     return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    // }
    
}
