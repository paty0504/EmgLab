<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductContact extends Model
{
    //
    protected $table = "product_contact";
    public $timestamps = false;
    public function product(){
        return $this->belongsTo('App\Product','idproduct','id');
    }  
  
}
