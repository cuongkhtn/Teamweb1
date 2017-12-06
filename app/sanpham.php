<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected  $table='sanpham';
    public function sanpham()
    {
    	return $this->belongsto('App\loaisp','idloai','id');//model liên quan ,khóa ngoại của mình ,khóa chính của mình
    }
}
