<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    
    protected $fillable = ['name', 'description', 'slug', 'online' , 'front_post_id', 'category_id'];

    public function category(){
        return $this->belongsTo('App\Category', 'catefory_id');
    }

    public function galeries() {
        return $this->hasMany('App\Galery');
    }

    public function frontPost () {
        return $this->hasOne('App\Post', 'front_post_id');
    }
}
