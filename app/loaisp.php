<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisp extends Model
{
    protected  $table='loaisp';
    public function loaisp()
    {
    	return this->hasmany('App\sanpham','idloai','id');//model liên quan ,khóa ngoại  của bảng con,khóa chính của mình 
    }
}
