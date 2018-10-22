<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'slug', 'online', 'category_id', 'next_id', 'preview_id', 'image', 'subtitle'];

    public function next(){
        return $this->hasOne('App\Article', 'previous_id');
    }

    public function previous(){
        return $this->hasOne('App\Article', 'next_id');
    }

    public function category(){
        $this->belongsTo('App\Category');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function setSlugAttribute($value){
        if (empty($value)){
            $this->attributes['slug'] = Str::slug($this->title);
        } else 
        $this->attributes['slug'] = $value;
    }

    // public function scopeLatestCreated($query){
    //     return $query->latest();
    // }
}
