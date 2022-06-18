<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class contact extends Controller
{
    
    public function Contact(){
        $comm = DB::table('contacts')->orderByDesc('id')->paginate(10);

        return view("Admin.contact",['contact' => $comm]);
    }

    
    public function Contactdes($id)
    {
        $addposts=DB::table('contacts')->where('id',$id)->delete();
        return redirect(route('contact'))->with('statusd','Contact Record Delete Successfull');
  
    }

  
  
}
