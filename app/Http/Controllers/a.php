<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class a extends Controller
{
    public function xinchao()
    {
    	echo"Chào các bạn";
    }
    public function thamso($ts)
    {
    	echo "tham số ".$ts;
    	// return redirect()->route('dinhdanh'); gọi thằng get trong controller gọi tên như thường
    }
    public function geturl(request $request)
    {
    	//return $request->path(); 
    	//return $request->url(); trả về  url 
    	if( $request->is('my*'))
    	{
    		echo"có my";
    	}
    	else
    	{
    		echo "ko có";
    	}
    	/*if( $request->isMethod('get'))
    	{
    		echo"phương thức get";
    	}
    	else
    	{
    		echo" phương thức post";
    	}*/
    }
    public function postForm(request $request)
    {
    	echo"Mật Khẩu là : ";
    	echo $request->Matkhau;
    }
    public function setcookie()
    {
    	$Response =new Response();
    	$Response->withCookie('ten','giatri',1);
    	return $Response;
    }
    public function getcookie(request $request)
    {
    	echo $request->cookie('ten');
    }
}
