<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    public function users()
    {
        return $this->hasOne('App\Models\User', 'id','user_id');
    }
    public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    protected $fillable = [
        'user_id', 'content', 'post_id', 'is_active',
    ];
}
