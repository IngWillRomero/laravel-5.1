<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipality ;
class Township extends Model
{
    //

    protected $table = 'townships' ;

    protected $fillable = ['name'] ;

    public function municipality(){
      return $this->belongsTo('Municipality') ;
    }
}
