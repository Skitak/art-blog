<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'description', 'slug', 'galery_id'];

    public function galery() {
        return $this->belongsTo('App\Galery', 'galery_id');
    } 
}
