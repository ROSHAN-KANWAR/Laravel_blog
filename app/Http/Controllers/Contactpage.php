<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Mail;
use Notification;
use App\Notifications\SendEmailNoti;
class Contactpage extends Controller
{
    public function Contactus(){
        return view('contactus');
    }
    public function SaveContact(Request $request){
       $request->validate([
           'txtname'=>'required',
           'txtemail'=>'required|email',
           'txtmsg'=>'required',
       ]);  
        DB::table('contacts')->insert([
            'name'=>$request->txtname,
            'email'=>$request->txtemail,
            'sms'=>$request->txtmsg,
        ]);
    

       $data= ['name'=>$request->txtname,'data'=>"Hello Mr/Miss welcome weblog online blogging system App"];
        $user['to']= $request->txtemail;
        Mail::send('mail',$data, function($message) use ($user){
        $message->to( $user['to']);
        $message->subject("Contact Messages");
        });
        return redirect(route('contactus'))->with('status','Your record has saved ,you will receive email as soon');
  
    }
}
