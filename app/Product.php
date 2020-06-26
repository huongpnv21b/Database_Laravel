<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table= 'products';
    public function type_product(){
        return $this->belongsTo('App\Type_Product','id_type','id');
    }

    public function bill_detail(){
        return $this->hasMany('App\Bill_Detail','id_product','id');
    }
}
