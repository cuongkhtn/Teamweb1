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

Route::get('/',['as'=>'trang-chu', 'uses'=>'DoAn_Controller@getindex']);//get index
route::Get('sp/{id}',['as'=>'san-pham','uses'=>'DoAn_Controller@getsp']);//get sản phẩm
route::Get('about',['as'=>'about','uses'=>'DoAn_Controller@getabout']);// get about
route::Get('contacts',['as'=>'contacts','uses'=>'DoAn_Controller@getcontacts']);//get contact
route::Get('chitiet/{id}',['as'=>'chitietsp','uses'=>'DoAn_Controller@getchitietsp']);//get chi tiết


route::Get('360qt69',['as'=>'admin','uses'=>'DoAn_Controller@getadmin']);//get login admin
route::Get('admindslh',['as'=>'dslh','uses'=>'DoAn_Controller@getdslh']);//get danh sách loại hoa ** admin
route::Get('adminthemlh',['as'=>'themlh','uses'=>'DoAn_Controller@getthemlh']);//get thêm loại hoa ** admin
route::post('adminthemlh',['as'=>'themlh','uses'=>'DoAn_Controller@postthemlh']);//post thêm loại hoa** admin

route::Get('admindsh',['as'=>'dsh','uses'=>'DoAn_Controller@getdsh']);//get danh sách hoa * admin
route::Get('adminthemh',['as'=>'themh','uses'=>'DoAn_Controller@getthemh']);//get thêm hoa * admin
route::Post('adminthemh',['as'=>'themh','uses'=>'DoAn_Controller@postthemh']);//post thêm hoa * admin

route::Get('adminuser',['as'=>'dsus','uses'=>'DoAn_Controller@getuser']);//get user *** admin
route::Get('adminthemuser',['as'=>'themus','uses'=>'DoAn_Controller@getthemuser']);// thêm user *** admin
