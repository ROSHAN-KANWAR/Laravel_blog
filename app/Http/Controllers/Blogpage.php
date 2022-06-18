<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Blogpage extends Controller
{
public function Blogsection(Request $request)    
    {
      $search = $request['search'] ?? "";
      if($search!=""){
     //where
     $post = DB::table('addposts')->select('title','cate' ,'slugurl' ,'photos')->where('title' ,'LIKE',"%$search%")->orWhere('cate' ,'LIKE',"%$search%")->paginate(10);
      }
      else{
       
        $post = DB::table('addposts')->select('title','cate' ,'slugurl' ,'photos')->orderByDesc('id')->Paginate(6);
      }
      
      return view('blogsection',['post'=>$post]);
    }
}
