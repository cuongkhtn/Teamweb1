<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class comment extends Model
{
    protected $table='comment';

    public function sanpham()
    {
    	return $this->belongsto('App\sanpham','idhoa','id');
    }
     public function user()
    {
    	return $this->belongsto('App\User','idUser','id');
    }
}
