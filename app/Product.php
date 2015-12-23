<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use App\Category ;
use App\Subcategory ;

class Product extends Model implements SluggableInterface
{
    //
    use SluggableTrait;

   protected $sluggable = [
       'build_from' => 'name',
       'save_to'    => 'slug',
   ];


    protected $table = 'products' ;

    protected $fillable = ['name','cost','slug'] ;

    public function category(){
      return $this->belongsTo('Category') ;
    }

    public function subcategory(){
      return $this->belongsTo('Subcategory') ;
    }



}
