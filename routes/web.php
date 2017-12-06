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
route::Get('sp',['as'=>'san-pham','uses'=>'DoAn_Controller@getsp']);
route::Get('about',['as'=>'about','uses'=>'DoAn_Controller@getabout']);
route::Get('contacts',['as'=>'contacts','uses'=>'DoAn_Controller@getcontacts']);
route::Get('chitiet',['as'=>'chitietsp','uses'=>'DoAn_Controller@getchitietsp']);