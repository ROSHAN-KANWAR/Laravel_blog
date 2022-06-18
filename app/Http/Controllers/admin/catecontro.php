<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class catecontro extends Controller
{
    public function Cateshow(){
        $cate = DB::table('categories')->get();
        return view("Admin.category" ,['cate' => $cate]);
    }
    public function destroy($id)
    {
        $student=DB::table('categories')->where('id',$id)->delete();
        return redirect(route('cateshow'))->with('status','Category Delete Successfull');
  
    }
}
