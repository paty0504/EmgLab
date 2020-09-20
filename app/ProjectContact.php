<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectContact extends Model
{
    //
    protected $table = "project_contact";
    public $timestamps = false;
    public function project(){
        return $this->belongsTo('App\Project','idproject','id');
    }  
  
}
