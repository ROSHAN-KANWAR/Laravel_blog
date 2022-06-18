<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class homecontro extends Controller
{
    public function Homeadmin(){
        $paystatu =Auth::user()->pay_status;
        $cate = DB::table("categories")->count();
        $com = DB::table("comments")->count();
        $user = DB::table('users')->count();
        $posi = DB::table("addposts")->count();
        $userall = DB::table('users')->orderByDesc('id')->paginate(6);
  
        $post = DB::table('addposts')->where('userid' ,Auth::id())->orderByDesc('id')->paginate(6);

        $postall = DB::table('addposts')->orderByDesc('id')->paginate(6);

        $pay = DB::table('payments')->orderByDesc('id')->paginate(6);
            if (Auth::id()) {  
                if(Auth::user()->usertype=="0"){
                 return view("Userdash.homeuser" ,
                 ['userall'=>$userall,
                    'post' =>$post ,
                    'cate'=>$cate,
                    'user'=>$user ,
                    'com'=>$com ,
                    'posi'=>$posi,
                    'pay'=>$pay,
                    'payst'=>$paystatu
                ]);
                }
                else{
                    return view("Admin.home" ,
                    ['userall'=>$userall,
                    'post' =>$postall ,
                    'cate'=>$cate,
                    'user'=>$user ,
                    'com'=>$com ,
                    'posi'=>$posi,
                    'pay'=>$pay,
                    'payst'=>$paystatu
                ]);
                }
            }

             else {
                return redirect()->back();
                  }
             
      
}
}
