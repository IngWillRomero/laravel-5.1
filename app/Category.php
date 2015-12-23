<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin ;
use App\Subcategory ;
use App\Product ;


class Category extends Model
{
    //

   protected $table = "categories" ;

   protected $fillable = ['name','img'] ;

   public function admin(){
     return $this->belongsTo('Admin') ;
   }

   public function subcategories(){
     return $this->hasMany('Subcategory') ;
   }

   public function products(){
     return $this->hasMany('Product') ;
   }
}
