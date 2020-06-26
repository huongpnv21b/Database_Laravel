<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';
    protected $fillabel = ['name','gender','email','address','phone_number','note','image'];
	public $timestamp = false;
    public function bill(){
        return $this->hasMany('App\Bill','id_customer','id');
    }
}
