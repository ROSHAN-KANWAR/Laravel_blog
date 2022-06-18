<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class usercontro extends Controller
{
    public function Usershow(){
        $userall = DB::table('users')->orderByDesc('id')->paginate(10);
        return view("Admin.user" ,['userall' => $userall]);
    }
}
