<?php

namespace App\Providers;
use App\loaisp;
use App\sanpham;
use App\shoppingcart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['master','sanpham','admin.loaisp','admin.sanpham','admin.themsp','admin.editlsp','admin.editsp','search','search2'],function($mn) // tham số gồm view sẽ chia sẽ và 1 function($tham số bất kì)
            {
                 $menu=loaisp::all();
                 $mn->with('menu',$menu);//tên truyền và giá trị truyền
            });
        view()->composer(['trangchu','chitietsp','master'],function($sanphamtop)
        {
            
            $sanpham = sanpham::where('new',1)->paginate(4);//phân trang (paginate),get()
            $sanphamtop->with('sanpham',$sanpham);
        });
        view()->composer(['master'],function($cart1)
        {
            if(Auth::check())
            {
                 $cart2=shoppingcart::where('idUser',Auth::user()->id)->get();
                 $cart1->with('cart2',$cart2);
            }

        }
    );
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
