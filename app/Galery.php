<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Galery extends Model
{
    protected $fillable = ['title', 'description', 'slug', 'online', 'subcategory_id', 'front_post_id'];
    //

    public function subarticle(){
        return $this->belongsTo('App\Subarticle', 'subarticle_id');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }

    public function front_post(){
        return $this->hasOne('App\Post', 'front_post_id');
    }

    public function setSlugAttribute($value){
        if (empty($value)){
            $this->attributes['slug'] = Str::slug($this->title);
        } else 
        $this->attributes['slug'] = $value;
    }
}
