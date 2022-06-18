<?php

namespace App\Http\Controllers\admin;
use App\Models\ProfilePhoto;
use App\Http\Controllers\Controller;
use App\Notifications\SendEmailNoti;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
class detailpro extends Controller
{
    public function Detailshow(){
        $profile = Auth::user();
       
        return view("Admin.detailpro" ,['profile'=> $profile]);
    }

// public function Send_test(){
//     $user = User::all();
//     $details=[
//         'body'=>'hello this is john',
//         'text'=>'welcome to weblog',
//     ];
//     foreach($user as $user)
//        $user->notify(new SendEmailNoti($details));
// return redirect()->back();

//     }



    public function ProfilePhoto(Request $request){

        $post = new ProfilePhoto;
       //  image file
        $photos = $request->photos;
        $photos_name= time().'.'.$photos->getClientoriginalExtension();
        $request->photos->move('profile_image',$photos_name);
        $post->photos=$photos_name;
       //  save user_id
        $user_id = Auth::id();
        $post->userid = $user_id;
      $post->save();

      return redirect(route('detailshow'))->with('status','Profile Photo Updated');
     
       }
}
