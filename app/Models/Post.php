<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body'
    ];
    
    // Table Name
    // public $table = 'posts';
    // Primary Key
    // public $primaryKey = 'id';
    // Timestamps
    // public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}

// Post::all();