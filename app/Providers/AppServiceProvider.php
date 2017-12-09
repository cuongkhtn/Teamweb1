<?php

namespace App\Providers;
use App\loaisp;
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
        view()->composer('master',function($mn) // tham số gồm view sẽ chia sẽ và 1 function($tham số bất kì)
            {
                 $menu=loaisp::all();
                 $mn->with('menu',$menu);//tên truyền và giá trị truyền
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
