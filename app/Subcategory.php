<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category ;
use App\Product ;

class Subcategory extends Model
{
    //
    protected $table = 'subcategories' ;

    protected $fillable = ['name','img'] ;

    public function category(){
        return $this->belongsTo('Category') ;
    }

    public function products(){
      return $this->hasMany('Product') ;
    }
}
