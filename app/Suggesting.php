<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client ;
use App\User ;

class Suggesting extends Model
{
    //
    protected $table = 'suggestings' ;

    protected $fillable = ['item','text','time'] ;

      public function client(){
        return $this->belongsTo('Client') ;
      }

      public function user(){
        return $this->belongsTo('User') ;
      }
}
