<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = "Project";
    public $timestamps = false;
    public function projectcontact(){
        return $this->hasMany('App\ProjectContact','idproject','id'); 
    }
}
