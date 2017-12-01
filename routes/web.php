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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('cuong',function()
// {
// 	return('Cường test ');
// });
// route::get('QuocCuong/test',function()
// {
// 	echo('<h1>cường đẹp trai</h1>');
// }
// );
// //truyển tham số
// route::get('route/{test}',function($test)
// {
// 	echo"cường route ".$test;
// })->where(['test'=>'[a-zA-Z0-9]+']);
// //định danh
// route::get('cuong1',['as'=>'dinhdanh',function()
// {
// 	echo "định danh";
// }]);
// //gọi lại cuong1
// route::get('cuong2',function()
// {
// 	return redirect()->Route('dinhdanh');//để gọi lại ta phải dùng hàm route trong  redirect()
// });
// //group tạo
// route::group(['prefix'=>'group'],function()
// {
// 	route::get('a',['as'=>'user1',function()
// 	{
// 		return redirect()->route('dinhdanh');
// 	}]);
// });
// //gọi controller
// route::get('Goicontroller','a@xinchao');
// //truyển dữ liệu cho controller
// Route::get('thamso/{ts}','a@thamso');
// //url
// route::get('myrequest','a@geturl');


// //gửi nhận giữ liệu với request 
// route::get('getFrom',function()
// {
// 	return view('postForm');
// });
// route::post('postForm',['as'=>'postForm','uses'=>'a@postForm']);

// //cookie
// route::get('setcookie','a@setcookie');
// route::get('getcookie','a@getcookie');

//uploadfile
route::get('home',function()
{
	return view('admin.master');
});
route::get('/',function()
{
	return view('admin.master');
});
route::get('about',function()
{
	return view('admin.about');
});
route::get('store',function()
{
	return view('admin.store');
});
route::get('featured',function()
{
	return view('admin.store');
});

route::get('blog',function()
{
	return view('admin.blog');
});

route::get('contact',function()
{
	return view('admin.contact');
});
route::get('single',function()
{
	return view('admin.single');
});

// route::get('database',function()
// {
// 	Schema::create('loginn',function($login)
// {
// 	$login->string('id',200);
// })
// 	echo"thanh cong";
// });