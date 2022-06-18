<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class Premium extends Controller
{
    public function Premiumac(){
        $users =Auth::user()->pay_status;
        // $check = DB::table('paymentaccounts')->where('user_id' ,$users)->first();
        if ($users!="complete") {
            return view('admin.premium');
        }
        return redirect()->back();
    }
}
