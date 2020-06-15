<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = "Project";
    public $timestamps = false;
    public function userproject(){
        return $this->hasMany('App\UserProject','idproject','id'); 
    }
}
