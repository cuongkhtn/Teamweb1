<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\sanpham;
use App\loaisp;

class ShopHoaController extends Controller
{
	public function getTrangDangNhap()
	{
		return view('admin.login');
	}

	public function getTrangDangKi()
	{
		return view('TrangDangKi');
	}
}