<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shoppingcart extends Model
{
    protected  $table='shoppingcart';
    protected $fillable = ['id', 'idUser', 'idsp','name', 'qty', 'price','img','created_at', 'updated_at'];
}
