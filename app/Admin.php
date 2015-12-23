<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User ;
use App\Client ;
use App\Category ;
use App\Image ;
use App\Municipality ;


class Admin extends Model
{
    //
    protected $table = "admins" ;

    protected $fillable = ['name', 'email'] ;

    protected $hidden = ['password','remember_token',] ;

    public function users(){
      return $this->hasMany('User') ;
    }

    public function clients(){
      return $this->hasMany('Client') ;
    }

    public function categories(){
      return $this->hasMany('Category') ;
    }

    public function images(){
      return $this->hasMany('Image') ;
    }

    public function minicipalities(){
      return $this->hasMany('Municipality') ;
    }

}
