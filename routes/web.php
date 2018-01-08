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
route::get('search',['as'=>'search','uses'=>'DoAn_Controller@getsearch']);
route::get('search1',['as'=>'search1','uses'=>'DoAn_Controller@getsearch1']);
route::get('login',['as'=>'login_index','uses'=>'DoAn_Controller@getlogin_index']);
route::post('login',['as'=>'login_post','uses'=>'DoAn_Controller@postlogin']);
route::post('resetpassword',['as'=>'resetpassword','uses'=>'DoAn_Controller@resetpassword']);
route::get('Logoutindex','DoAn_Controller@getlogoutindex'); //log out 
route::get('signup',['as'=>'signup_index','uses'=>'DoAn_Controller@getsignup_index']);
route::post('signup',['as'=>'signup_idp','uses'=>'DoAn_Controller@postsignup_index']);
Route::get('register/verify/{code}',['as'=>'xacnhanlogin','uses'=>'DoAn_Controller@verify']);
Route::get('thongtin/{id}',['as'=>'thongtin','uses'=>'DoAn_Controller@getthongtin']);
Route::post('thongtin/{id}',['as'=>'thongtin','uses'=>'DoAn_Controller@postthongtin']);
route::get('add/{id}/{idUser}',['as'=>'add','uses'=>'DoAn_Controller@add']);
route::get('getgiohang/{idUser}',['as'=>'getgiohang','uses'=>'DoAn_Controller@getgiohang']);
route::get('logincart',['as'=>'logincart','uses'=>'DoAn_Controller@logincart']);
route::get('decart/{id}',['as'=>'decart','uses'=>'DoAn_Controller@decart']);
route::get('quenmatkhau',['as'=>'quenmatkhau','uses'=>'DoAn_Controller@quenmatkhau']);
route::group(['prefix'=>'admin','middleware'=>'adminlogin'],function()
{
route::Get('admindslh',['as'=>'dslh','uses'=>'DoAn_Controller@getdslh']);//get danh sách loại hoa ** admin
route::Get('adminthemlh',['as'=>'themlhg','uses'=>'DoAn_Controller@getthemlh']);//get thêm loại hoa ** admin
route::Get('adminxoalh/{id}',['as'=>'delhg','uses'=>'DoAn_Controller@getxoalh']);//get xóa loại hoa ** admin
route::post('adminthemlh',['as'=>'themlhp','uses'=>'DoAn_Controller@postthemlh']);//post thêm loại hoa** admin
route::Get('admineditlh/{id}',['as'=>'editlhg','uses'=>'DoAn_Controller@geteditlh']);//get edit loại hoa ** admin
route::post('admineditlh/{id}',['as'=>'editlhb','uses'=>'DoAn_Controller@posteditlh']);//post edit loại hoa ** admin
route::Get('admindsh',['as'=>'dsh','uses'=>'DoAn_Controller@getdsh']);//get danh sách hoa * admin
route::Get('adminthemh',['as'=>'themhg','uses'=>'DoAn_Controller@getthemh']);//get thêm hoa * admin
route::Post('adminthemh',['as'=>'themhp','uses'=>'DoAn_Controller@postthemh']);//post thêm hoa * admin
//route::Get('adminth',['as'=>'themh','uses'=>'DoAn_Controller@getthemh']);//get thêm hoa * admin
route::Get('adminedith/{id}',['as'=>'edithg','uses'=>'DoAn_Controller@getedith']);//get edit hoa ** 
route::post('adminedith/{id}',['as'=>'edithb','uses'=>'DoAn_Controller@postedith']);//post edit loại hoa** admin
route::Get('adminxoah/{id}',['as'=>'dehg','uses'=>'DoAn_Controller@getxoah']);
route::Get('adminuser',['as'=>'dsus','uses'=>'DoAn_Controller@getuser']);//get user *** admin
route::Get('adminthemuser',['as'=>'themus','uses'=>'DoAn_Controller@getthemuser']);// thêm user *** admin
route::post('adminthemuser',['as'=>'adminthemuser','uses'=>'DoAn_Controller@adminthemuser']);
route::get('getsua/{id}',['as'=>'getsua','uses'=>'DoAn_Controller@getsua']);//get edit  **
route::post('postsua/{id}',['as'=>'postsua','uses'=>'DoAn_Controller@postsua']);
route::get('Logout','DoAn_Controller@getlogout'); //log out 
});
route::post('comment/{id}',['as'=>'cmt','uses'=>'comment_Controller@postcmt']);
route::Get('360qt69',['as'=>'admin','uses'=>'DoAn_Controller@getadmin']);//get login admin
route::post('360qt69',['as'=>'admin','uses'=>'DoAn_Controller@postadmin']);//get login admin
 route::group(['prefix'=>'comment','middleware'=>'adminlogin'],function()
{
	route::Get('xoa/{id}',['as'=>'xoacmt','uses'=>'comment_Controller@getxoa']);
	route::post('comment/{id}',['as'=>'cmt','uses'=>'comment_Controller@postcmt']);
});