<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\slide;
use App\sanpham;
use App\loaisp;
use App\User;
use App\shoppingcart;
use App\comment;
use Hash;
use Mail;
use Cart;

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
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password, 'confirmed' => 1]))
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
                // 'g-recaptcha-response' => 'required'
            ],
            [
                'email.unique'=>'email đã tồn tại',
                're_password.same'=>'Mật khẩu không trùng nhau',
                // 'g-recaptcha-response.required'=>'check you is not robot !'

            ]
        );
        $confirmation_code = time().uniqid(true);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->loaiuser=2;
        $user->confirmed=0;
        $user->confirmation_code = $confirmation_code;
        $user->save();
        Mail::send('verify', ['confirmation_code'=>$confirmation_code], function($message) use ($request) {
            $message->from('cuonganh365@gmail.com','ShopHoa360');
             $message->to( $request->email,$request->name)   
                ->subject('Confirm your account on ShopHoa360 ');
        });
         return redirect('login')->with('thongbao','Vui lòng xác nhận tài khoản email')->withinput();
    }

    public function verify($code)
    {
        $user = User::where('confirmation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'confirmed' => 1,
                'confirmation_code' => null
            ]);
            $notification_status = 'Bạn đã xác nhận thành công';
        } else {
            $notification_status ='Mã xác nhận không chính xác';
        }

        return redirect(route('login_index'))->with('status', $notification_status);
    }

    public function getthongtin()
    {
        return view('thongtin');
    }
    public function postthongtin(Request $request,$id)
    {
         $this->validate($request,
            [
                'name'=>'required',
                'address'=>'required',
                'phone'=>'required',
                
            ],
            [
                 'name.required'=>'Bạn chưa nhập tên',
                 'address.required'=>'Bạn chưa nhập địa chỉ',
                 'phone.required'=>'Bạn chưa nhập số điện thoại',
                 
            ]);
        if($request->oldpass || $request->password_1 || $request->password_2 != null)
            {
                 $this->validate($request,
                    [
                        'oldpass'=>'required',
                        'password_1'=>'required',
                        'password_2'=>'required',
                        'password_2'=>'same:password_1',
                    ],
                    [
                         'oldpass.required'=>'Nhập lại mật khẩu cũ khi đổi mật khẩu',
                         'password_1.required'=>'Không được bỏ trống mật khẩu mới',
                         'password_2.required'=>'Không được bỏ trống xác nhận mật khẩu',
                         'password_2.same'=>'Mật khẩu không trùng nhau',
                    ]);
                   if(Auth::attempt(['password'=> $request->oldpass,'id'=>$id]))
                       {
                          $update=user::where('id',$id)->update(['name'=>$request->name,'address'=>$request->address,'phone'=>$request->phone,'password'=>Hash::make($request->password_1)]);
                       }
                    else
                    {
                        return redirect('thongtin/'.$request->id)->with('thongbao','Sai mật khẩu');
                    }
            }
        else
            {
                $update=user::where('id',$id)->update(['name'=>$request->name,'address'=>$request->address,'phone'=>$request->phone]);
            }
        return redirect('thongtin/'.$request->id)->with('thongbao','Update thành công');
        
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
        $comment = comment::where('idhoa',$sp)->paginate(4);//nhiều
        $sptt=sanpham::where([
            ['idloai',$chitiet['idloai']],
            ['id','<>',$chitiet['id']],
            ])->inRandomOrder()->paginate(3);
        $topsp = sanpham::where('new',2)->paginate(3);
        return view('chitietsp',compact('chitiet','sptt','topsp','comment'));
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
        $user=user::all();
        return view('admin.user',compact('user'));
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

    public function getsearch(Request $request)
    {
        $search=sanpham::where('name','like','%'.$request->search.'%')->paginate(9);
        $search1=sanpham::where('name','like','%'.$request->search.'%')->get();
        return view('search',compact('search','search1'));
    }
    public function getsearch1(Request $request)
    {
         $search=sanpham::where([['name','like','%'.$request->input1.'%'],['giakm','>',$request->input2.'%'],['giakm','<',$request->input3.'%'],['giakm','<>','0'],])->orwhere([['name','like','%'.$request->input1.'%'],['gia','>',$request->input2.'%'],['gia','<',$request->input3.'%'],['giakm','0'],])->paginate(9);
         $search1=sanpham::where([['name','like','%'.$request->input1.'%'],['giakm','>',$request->input2.'%'],['giakm','<',$request->input3.'%'],['giakm','<>','0'],])->orwhere([['name','like','%'.$request->input1.'%'],['gia','>',$request->input2.'%'],['gia','<',$request->input3.'%'],['giakm','0'],])->get();
        return view('search',compact('search','search1'));
    }
     public function add($id,$idUser)
    {
        $sanpham=sanpham::where('id',$id)->first();
       // if($sanpham->giakm == 0) 
       //  {
       //      Cart::add(array('id'=>$id,'name'=>$sanpham->name,'qty'=>1,'price'=>$sanpham->gia,'options'=>array('img'=>$sanpham->image)));
       //  } 
       // else
       //  {
       //      Cart::add(array('id'=>$id,'name'=>$sanpham->name,'qty'=>1,'price'=>$sanpham->giakm,'options'=>array('img'=>$sanpham->image)));
       //  }
        $cart=new shoppingcart;
        $cart->idUser=$idUser;
        $cart->idsp=$id;
        $cart->name=$sanpham->name;
        $cart->qty=1;
        if($sanpham->giakm == 0) 
        {
              $cart->price=$sanpham->gia;
        } 
       else
        {
             $cart->price=$sanpham->giakm;
        } 
        $cart->img=$sanpham->image;
        $cart->save();
        // $content = Cart::content();
        return redirect()->back()->with('thongbao','Thêm vào giỏ hàng thành công ');
    }
    public function getgiohang($idUser)
    {
        $cart=shoppingcart::where('idUser',$idUser)->paginate(3);
         return view('shopping_cart',compact('cart'));
    }
    public function logincart()
        {
             return redirect('login')->with('thongbao','Đăng nhập để mua hàng');
        }
    public function decart($id)
    {
        $decart=shoppingcart::find($id);
        $decart->delete();
        return redirect()->back()->with('thongbao','Xóa Thành công');
    }
    public function quenmatkhau()
    {
        return view('resetpassword');
    }
    public function resetpassword(Request $request)
    {
       
       $user=User::where('email',$request->email)->first();
       if(count($user)>0)
       {
            $password=str_random(11);
            $user->update([
                'password' =>Hash::make($password)
            ]);
            Mail::send('mailreset', ['password'=>$password], function($message) use ($request,$user) {
            $message->from('cuonganh365@gmail.com','ShopHoa360');
             $message->to( $request->email,$user->name)   
                ->subject('reset your password on ShopHoa360 ');
        });
         return redirect('login')->with('thongbao','Mật khẩu mới đã được gửi tới email '.$request->email)->withinput();
       }
       else
       {
            return redirect()->back()->with('thongbao','Email này chưa được đăng kí');
       }   
    }
    //////
    public function adminthemuser(Request $request)
    {
        $this->validate($request,
            [
                'email'=>'unique:users,email|required',//min:3
                're_password'=>'same:password|required',
                'password'=>'required',
                'name'=>'required',
                'rdoLevel'=>'required',
            ],
            [
                'email.required'=>'Bạn chưa nhập email',
                'rdoLevel.required'=>'Vui lòng cấp quyền cho tài khoản',
                'name.required'=>'Bạn chưa nhập name',
                'password.required'=>'Bạn chưa nhập password',
                're_password.required'=>'Bạn chưa nhập ô xác nhận mật khẩu',
                'email.unique'=>'email đã tồn tại',
                're_password.same'=>'Mật khẩu không trùng nhau',
            ]
        );
        $user=new User();
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->phone='';
        $user->address='';
        if($request->rdoLevel == 1)
        {
            $user->loaiuser=1;
        }
        else
        {
             $user->loaiuser=2;
        }
        $user->confirmed=1;
        $user->save();
         return redirect()->back()->with('thongbao','Thêm user thành công')->withinput();
    }

    public function getsua($id)
    {
        $user = User::find($id);
        return view('admin.sua_useradmin',compact('user'));
    }
    public function postsua(Request $request,$id)
    {
        $this->validate($request,
          [       
                
                'name'=>'required',
                'rdoLevel'=>'required',
            ],
            [
                'rdoLevel.required'=>'Vui lòng cấp quyền cho tài khoản',
                'name.required'=>'Bạn chưa nhập name',
            ]);
        $user=user::where('id',$id)->update(['name'=>$request->name,'loaiuser'=> $request->rdoLevel]);     
        if($request->password || $request->re_password != null)
        {
            $this->validate($request,
          [       
                're_password'=>'same:password|required',
                'password'=>'required',
            ],
            [
                'password.required'=>'Bạn chưa nhập password',
                're_password.required'=>'Bạn chưa nhập ô xác nhận mật khẩu',
                're_password.same'=>'Mật khẩu không trùng nhau',
            ]);
             $user=user::where('id',$id)->update([
                'password'=>Hash::make($request->password),
            ]);
        }
        return redirect()->back()->with('thongbao','Update thành công');
    }
}


