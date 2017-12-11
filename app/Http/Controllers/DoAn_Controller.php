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
                'name.required'=>'Bạn chưa nhập tên loại hoa',
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

    public function postthemh(request $request)
    {
        $this->validate($request,
            [
                'ten'=>'required|max:30',
                'tenloai'=>'required|numeric',
                'gia'=>'required|numeric',
                'giakm'=>'numeric',
                'soluong'=>'required|numeric',
                'image' => 'required'
            ],
            [
                'ten.required'=>'Bạn chưa nhập tên hoa',
                'ten.max'=>'Số kí tự không vượt quá 30',
                'tenloai.required'=>'Bạn chưa id loại hoa',
                'tenloai.numeric'=>'ID phải là số',
                'gia.required'=>'Bạn chưa nhập giá ',
                'gia.numeric'=>'Giá phải là số',
                'giakm.digits'=>'Giá khuyến mãi phải là số',
                'soluong.required'=>'Bạn chưa nhập số lượng',
                'soluong.digits'=>'số lượng phải là số',
                //'image.dimensions'=>'Hình ảnh kích thước không hợp lệ',
                'image.required'=>'Bạn chưa thêm hình ảnh',
            ]
        );
        $sp =new sanpham;
        $sp->name=$request->ten;
        $sp->idloai=$request->idloai;
        $sp->gia=$request->gia;
        $sp->giakm=$request->giakm;
        $sp->description=$request->mota;
        $sp->soluong=$request->soluong;
        $sp->image=$request->image;
        $sp->save();
        return redirect('adminthemh')->with('thongbao','Thêm thành công');
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
