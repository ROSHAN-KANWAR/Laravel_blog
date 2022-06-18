<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class paycontro extends Controller
{
    public function Payshow(){
        $paycheck =Auth::user()->pay_status;
        if (Auth::user()->usertype == "1") {
        $pay = DB::table('payments')->orderByDesc('id')->paginate(10);
    } 
    else {
        $pay = DB::table('payments')->where('user_id' ,Auth::id())->paginate(3);
    }
    return view("Admin.pay",['pay' => $pay ,'paych'=>$paycheck]);
}

}