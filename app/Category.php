<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    public function articles(){
        $this->hasMany('App\Article');
    }

    public function subcategories(){
        return $this->hasMany('App\Subcategory');
    }
}
