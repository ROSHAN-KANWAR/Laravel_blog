<?php

namespace App\Http\Controllers\admin;
use App\Models\addpost;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\send;
use Notifications;
use App\Notifications\SendEmailNoti;
use App\Notifications\Postnotification;

use App\Models\User;
use App\Notifications\Invoicepaid;
use Illuminate\Notifications\Events\NotificationSent;
use Illuminate\Support\Facades\Notification;
class addpostcontro extends Controller
{
    // show form
    public function AddPost(){
        $cate = DB::table('categories')->get();
        return view("Admin.addpost" ,['cate' => $cate]);
    }

    // create post
    public function UploadPost(Request $request){
     $post = new addpost;
    //  image file
     $photos = $request->photos;
     $photos_name= time().'.'.$photos->getClientoriginalExtension();
     $request->photos->move('addpost_image',$photos_name);
     $post->photos=$photos_name;
   // title to slug urls
    $post->title = $request->title;
    $post->slugurl = Str::slug($request->title);
     $post->cate = $request->cate;
    //  save user_id
     $user_id = Auth::id();
     $post->userid = $user_id;
    //  descrip
    $post->descrip = $request->descrip;
   $post->save();


// $details =[
//     'PostBy'=>Auth::user()->name,
//     'head' =>'New Blog is Uploaded',
//     'title' =>$request->title ,
//     'url'=>$post->slugurl,
// ];

   //send mail
//    $users = User::get();
// foreach($users as $users)
//     $users->notify(new Invoicepaid($details));

  //  Notification::sendNow($users , new Invoicepaid());

   return redirect(route('postshow'))->with('status','Post Added Successfull');
  
    }




    //profile photo
     
}
