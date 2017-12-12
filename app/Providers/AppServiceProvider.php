<?php

namespace App\Providers;
use App\loaisp;
use App\sanpham;
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
        view()->composer(['master','sanpham','admin.loaisp','admin.sanpham','admin.themsp','admin.editlsp','admin.editsp'],function($mn) // tham số gồm view sẽ chia sẽ và 1 function($tham số bất kì)
            {
                 $menu=loaisp::all();
                 $mn->with('menu',$menu);//tên truyền và giá trị truyền
            });
        view()->composer(['trangchu','chitietsp'],function($sanphamtop)
        {
            
            $sanpham = sanpham::where('new',1)->paginate(4);//phân trang (paginate),get()
            $sanphamtop->with('sanpham',$sanpham);
        });
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
