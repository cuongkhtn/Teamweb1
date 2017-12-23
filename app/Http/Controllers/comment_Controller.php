<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\slide;
use App\sanpham;
use App\loaisp;
use App\User;
use App\comment;
use App\Events\redis_event;
use Hash;
class comment_Controller extends Controller
{
   public function getxoa($id)
   {
         $comment = comment::find($id);
         $comment->delete();
         return redirect()->back()->with('thongbao','Xóa thành công ');
   }
   public function postcmt($id,Request $request)
   {
         $comment =new comment;
         $comment->idUser = Auth::user()->id;
         $comment->name = Auth::user()->name;
         $comment->loaiuser = Auth::user()->loaiuser;
         $comment->idhoa=$id;
         $comment->NoiDung=$request->NoiDung;
         $comment->save();
         event(
         $e = new redis_event($comment)
         );
         return redirect()->back();
   }
}