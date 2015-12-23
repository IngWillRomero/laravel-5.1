<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin ;
use App\Suggesting ;

class Client extends Model
{
    //

    protected $table = "clients" ;

    protected $fillable = ['name','email','address','cel'] ;

    public function admin(){
      return $this->belongsTo('Admin') ;
    }

    public function suggestings(){
      return $this->hasMany('Suggesting') ;
    }
}
