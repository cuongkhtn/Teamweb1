<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected  $table='order';
    protected $fillable = ['id','idbill','idsp','name', 'qty', 'price','created_at', 'updated_at'];
}
