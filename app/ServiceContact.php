<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceContact extends Model
{
    //
    protected $table = "service_contact";
    public $timestamps = false;
    public function service(){
        return $this->belongsTo('App\Service','idservice','id');
    }  
  
}
