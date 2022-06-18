<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Homepage extends Controller
{
  public function Index()
  {
    $post = DB::table('addposts')->select('title','cate' ,'slugurl' ,'photos')->orderByDesc('id')->paginate(6);
    return view('index' ,['post'=>$post]);
  }
  public function Searched(Request $request){
    $search = $request['search'] ?? "";
    if($search!=""){
   //where
   $post = DB::table('addposts')->where('title' ,'LIKE',"%$search%")->orWhere('cate' ,'LIKE',"%$search%")->paginate(10);
    }
    else{
      $post = DB::table('addposts')->Paginate(6);
    }
    
    return view('searchpage',['post'=>$post ]);
  }
}
