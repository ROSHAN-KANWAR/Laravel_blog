<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class comcontroo extends Controller
{
    public function Comshow(){
        if (Auth::user()->usertype == "1") {
             $comm = DB::table('comments')->orderByDesc('id')->paginate(10);
  
        } 
        else {
         $comm = DB::table('comments')->where('user_id' ,Auth::id())->orderByDesc('id')->paginate(10);
  
        }
        return view("Admin.comment",['comment' => $comm]);


    }
public function Commappro($id){
    $addposts=DB::table('comments')->where('id',$id)->update([
        'status'=>"approved" 
    ]);
    return redirect(route('comshow'))->with('status','Approved Comments');

}

    public function Commdes($id)
    {
        $addposts=DB::table('comments')->where('id',$id)->delete();
        return redirect(route('comshow'))->with('statusd','Comment  Delete Successfull');
  
    }
}
