<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin ;
use App\User ;
use App\Township ;

class Municipality extends Model
{
    //
    protected $table = 'municipalities' ;

    protected $fillable = ['name'] ;

    public function admin(){
      return $this->belongsTo('Admin') ;
    }

    public function users(){
        return $this->hasMany('User') ;
    }

    public function townships(){
      return $this->hasMany('Township') ;
    }
 }
