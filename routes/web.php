<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',['as'=>'trang-chu', 'uses'=>'DoAn_Controller@getindex']);
route::Get('sp/{id}',['as'=>'san-pham','uses'=>'DoAn_Controller@getsp']);
route::Get('about',['as'=>'about','uses'=>'DoAn_Controller@getabout']);
route::Get('contacts',['as'=>'contacts','uses'=>'DoAn_Controller@getcontacts']);
route::Get('chitiet/{id}',['as'=>'chitietsp','uses'=>'DoAn_Controller@getchitietsp']);
route::Get('360qt69',['as'=>'admin','uses'=>'DoAn_Controller@getadmin']);////fix
route::Get('admindslh',['as'=>'dslh','uses'=>'DoAn_Controller@getdslh']);//loại
route::Get('adminthemlh',['as'=>'themlh','uses'=>'DoAn_Controller@getthemlh']);//loại
route::post('adminthemlh',['as'=>'themlh','uses'=>'DoAn_Controller@postthemlh']);//loại
route::Get('admindsh',['as'=>'dsh','uses'=>'DoAn_Controller@getdsh']);
route::Get('adminthemh',['as'=>'themh','uses'=>'DoAn_Controller@getthemh']);
route::Get('adminuser',['as'=>'dsus','uses'=>'DoAn_Controller@getuser']);
route::Get('adminthemuser',['as'=>'themus','uses'=>'DoAn_Controller@getthemuser']);
