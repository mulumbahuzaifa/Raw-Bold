<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function children(){
        return $this->hasMany('App\Category','p_id');
    }
}
