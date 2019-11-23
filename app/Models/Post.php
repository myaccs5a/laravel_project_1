<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title','content','category_id','user_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'post_id');
    }

    public function categories()
    {
       return $this->belongsTo('App\Models\Categorie','category_id');
    }

}
