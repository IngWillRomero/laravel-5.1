<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;

class Image extends Model
{
    //

    protected $table = "images" ;

    protected $fillable = ['name','route'] ;

    public function admin(){
      return $this->belongsTo('Admin') ;
    }
}
