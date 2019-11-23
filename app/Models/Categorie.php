<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $fillable =[
        'user_id','name',
    ];
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function posts()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
}
