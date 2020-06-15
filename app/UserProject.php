<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    //
    protected $table = "user_project";
    public $timestamps = false;
    public function project(){
        return $this->belongsTo('App\Project','idproject','id');
    }  
    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }
}
