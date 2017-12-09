<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\sanpham;

class DoAn_Controller extends Controller
{
    public function getindex()
    {
        $slide = slide::all();
        $sanpham = sanpham::where('new',1)->get();
        $topsp =sanpham::where('new',2)->get();
    	return view('trangchu',compact('slide','sanpham','topsp'));
    }
    public function getsp()
    {
    	return view('sanpham');
    }
    public function getabout()
    {
    	return view('about');
    }
        public function getcontacts()
    {
    	return view('contacts');
    }
         public function getchitietsp()
    {
        return view('chitietsp');
    }
}
