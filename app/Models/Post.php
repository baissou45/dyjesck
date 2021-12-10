<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titre',
        'description',
        'epingle',
        'user_id',
        'date',
        'categorie_id',
        'slug',
        'img',
        'img4',
        'img2',
        'img3',        
    ];
    
    protected $dates = ['deleted_at'];

    public function user()    {
        return $this->belongsTo(User::class);
    }

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
}
