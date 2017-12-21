<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\slide;
use App\sanpham;
use App\loaisp;
use App\User;
use App\comment;
use Hash;

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

    public function getlogin_index()
    {
        return view('login_index');
    }

     public function postlogin(Request $request)
    {
        $this->validate($request,
            [
                //'g-recaptcha-response' => 'required',
            ],
            [
                //'g-recaptcha-response.required'=>'check you is not robot !'
            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
           {
             return redirect('../'); 
           }
        else
        {
            return redirect('login')->with('thongbao','Đăng nhập không thành công');
        }
    }

    public function getsignup_index()
    {
        return view('signup');
    }

     public function postsignup_index(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'unique:users,email',//min:3
                're_password'=>'same:password',
                'g-recaptcha-response' => 'required'
            ],
            [
                'email.unique'=>'email đã tồn tại',
                're_password.same'=>'Mật khẩu không trùng nhau',
                'g-recaptcha-response.required'=>'check you is not robot !'

            ]
        );
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->loaiuser=2;
        $user->save();
         return redirect('login')->with('thongbao','Đăng kí thành công')->withinput();
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

    public function getxoalh($id)
    {
       $theloai=loaisp::find($id);
       $theloai->delete();
       return redirect('admindslh')->with('thongbao','Xóa thành công');
    }

    public function geteditlh($id)
    {
        $sp=loaisp::find($id);
        return view('admin.editlsp',compact('sp'));
    }

      public function posteditlh(Request $request)
    {
        $theloai=loaisp::find($request->id);
        $this->validate($request,
            [
                 'name'=>'required|max:30|unique:loaisp,name'//min:3
            ],
            [
                 'name.required'=>'Bạn chưa nhập tên loại hoa',
                'name.unique'=>'Tên loại hoa đã tồn tại',
                'name.max'=>'Số kí tự không vượt quá 30'
            ]
        );
        $theloai->name=$request->name;
        $theloai->id=$request->id;
        $theloai->save();
        return redirect('admineditlh/'.$request->id)->with('thongbao','Thêm thành công');
    }

    public function postthemlh( Request $request)
    {
        $this->validate($request,
            [
                'name'=>'required|max:30|unique:loaisp,name'//min:3
            ],
            [
                'name.required'=>'Bạn chưa nhập tên loại hoa',
                'name.unique'=>'Tên loại hoa đã tồn tại',
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

    public function getedith($id)
    {
        $sp=sanpham::find($id);
        return view('admin.editsp',compact('sp'));
    }

    public function postedith(Request $request,$id)
    {
        $sanpham=sanpham::find($id);
        $this->validate($request,
            [
                'ten'=>'required|max:30',
                'tenloai'=>'numeric',
                'gia'=>'required|numeric',
                'giakm'=>'numeric',
                'soluong'=>'required|numeric',
                'new'=>'required|numeric'
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
                //'Hinh.dimensions'=>'Hình ảnh kích thước không hợp lệ',
                'new.required'=>'Bạn chưa tình trạng',
                'new.numeric'=>'Tình trạng phải là số',
            ]
        );
        $sanpham->id=$request->id;
        $sanpham->name=$request->ten;
        $sanpham->idloai=$request->idloai;
        $sanpham->description=$request->mota;
        if($request->hasFile('Hinh'))
        {
            $file=$request->File('Hinh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png')
            {
                return redirect('admindsh')->with('loi','Chỉ được chọn hình ảnh có đuôi jpg,png');
            }
            $name=$file->getClientOriginalName();
            $tenhinh=str_random(4)."_".$name;
            while(file_exists("image/product".$tenhinh))
            {
                $tenhinh=str_random(4)."_".$name;
            }
            $file->move("qt69admin/image/product",$tenhinh);
            $sp->image=$tenhinh;
        }
        else
        {
            $sanpham->image="";
        }
        $sanpham->gia=$request->gia;
        $sanpham->giakm=$request->giakm;
        $sanpham->soluong=$request->soluong;
        $sanpham->new=$request->new;
       
        
        $sanpham->save();
        return redirect('admindsh')->with('thongbao','Update thành công');
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
                'tenloai'=>'numeric',
                'gia'=>'required|numeric',
                'giakm'=>'numeric',
                'soluong'=>'required|numeric',
                'Hinh' => 'required',
                'new'=>'required|numeric'
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
                //'Hinh.dimensions'=>'Hình ảnh kích thước không hợp lệ',
                'Hinh.required'=>'Bạn chưa thêm hình ảnh',
                'new.required'=>'Bạn chưa tình trạng',
                'new.numeric'=>'Tình trạng phải là số',
            ]
        );
        $sp =new sanpham;
        $sp->name=$request->ten;
        $sp->idloai=$request->idloai;
        $sp->description=$request->mota;
        if($request->hasFile('Hinh'))
        {
            $file=$request->File('Hinh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png')
            {
                return redirect('adminthemh')->with('loi','Chỉ được chọn hình ảnh có đuôi jpg,png');
            }
            $name=$file->getClientOriginalName();
            $tenhinh=str_random(4)."_".$name;
            while(file_exists("image/product".$tenhinh))
            {
                $tenhinh=str_random(4)."_".$name;
            }
            $file->move("qt69admin/image/product",$tenhinh);
            $sp->image=$tenhinh;
        }
        else
        {
            $sp->image="";
        }
        $sp->gia=$request->gia;
        $sp->giakm=$request->giakm;
        $sp->soluong=$request->soluong;
        $sp->new=$request->new;
       
        
        $sp->save();
        return redirect('adminthemh')->with('thongbao','Thêm thành công');
    }
    
    public function getxoah($id)
    {
       $theloai=sanpham::find($id);
       $theloai->delete();
       return redirect('admindsh')->with('thongbao','Xóa thành công');
    }

    public function getuser()
    {
        return view('admin.user');
    }

    public function getthemuser()
    {
        return view('admin.them_user');
    }

// ----------------
    public function postadmin(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required'
            ],
            [
                'email.required'=>'Bạn chưa nhập email',
                'password.required'=>'Bạn chưa nhập password'
            ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
            {
                return redirect('admin/admindslh');
            }
        else
        {
            return redirect('360qt69')->with('thongbao','Đăng nhập không thành công');
        }
    }
    
    public function getlogout()
    {
        Auth::logout();
        // Session::flush();
        return redirect('360qt69');
    }

     public function getlogoutindex()
    {
         Auth::logout();
         // Session::flush();
        return redirect('/');
    }

}


