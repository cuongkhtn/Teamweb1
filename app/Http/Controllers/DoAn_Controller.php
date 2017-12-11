<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\sanpham;
use App\loaisp;

class DoAn_Controller extends Controller
{
    public function getindex()
    {
        $slide = slide::all();
        $sanphamc = sanpham::where('new',1)->get();//phân trang (paginate),get()
        $spkmc =sanpham::where('giakm','<>',0)->get();
        $spkm =sanpham::where('giakm','<>',0)->paginate(4);
    	return view('trangchu',compact('slide','spkm','sanphamc','spkmc'));
        
    }
    public function getsp($sp)
    {
        $trangsp =sanpham::where('idloai',$sp)->paginate(9);
        $trangsp1 =sanpham::where('idloai',$sp)->get();
        $namesp =loaisp::where('id',$sp)->first();
    	return view('sanpham',compact('trangsp','namesp','trangsp1'));
    }
    public function getabout()
    {
    	return view('about');
    }
        public function getcontacts()
    {
    	return view('contacts');
    }
         public function getchitietsp($sp)
    {
        $chitiet=sanpham::where('id',$sp)->first();
        $sptt=sanpham::where([
            ['idloai',$chitiet['idloai']],
            ['id','<>',$chitiet['id']],
            ])->inRandomOrder()->paginate(3);
        $topsp = sanpham::where('new',2)->paginate(3);
        return view('chitietsp',compact('chitiet','sptt','topsp'));
    }

    public function getadmin()
    {
        return view('admin.login');
    }

    public function getdslh()
    {
       
        return view('admin.loaisp');
    }

    public function getthemlh()
    {
        return view('admin.themloaisp');
    }

    public function postthemlh( Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|max:30'//min:3
            ],
            [
                'name.request'=>'Bạn chưa nhập tên loại hoa',
                'name.max'=>'Số kí tự không vượt quá 30'
            ]);
        $loaisp =new loaisp;
        $loaisp->name=$request->name;
        $loaisp->save();
        return redirect('adminthemlh')->with('thongbao','Thêm thành công');
    }

    public function getdsh()
    {
        $dsh=sanpham::all();
        return view('admin.sanpham',compact('dsh'));
    }

    public function getthemh()
    {
        return view('admin.themsp');
    }

    public function getuser()
    {
        return view('admin.user');
    }

    public function getthemuser()
    {
        return view('admin.them_user');
    }
}
