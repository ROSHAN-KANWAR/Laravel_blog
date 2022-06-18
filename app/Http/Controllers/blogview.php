<?php

namespace App\Http\Controllers;
use App\Http\Controllers\integerValue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Mail;
class blogview extends Controller
{
    public function BlogView(string $cate ,string $slug_url)    
    {
      
       $comm1 =DB::table('addposts')->where('slugurl', $slug_url)->first();
     $comm = DB::table('comments')->select('comment' ,'email')->where('post_id' ,$comm1->id)->where('status' ,"approved")->get();
      //commnet show
  $post = DB::table('addposts')->where('slugurl',$slug_url)->orWhere('cate' ,$cate)->first();
  $relatepost = DB::table('addposts')->select('title','cate' ,'slugurl' ,'created_at')->where('cate' ,$cate)->paginate(4);
  $categ = DB::table("categories")->select('cate_name')->get();
  return view('blogfullview' ,
  ['comm'=>$comm,
    'post'=>$post ,
  'relatepost'=>$relatepost ,
  'categ'=> $categ]);
    }
    public function CommentSave(Request $request){
     
        # code...
      $request->validate([
        'txtemail'=>'required|email',
        'txtmsg'=>'required',
    ]);  

 // comments save
            $userid = Auth::id() ?? '0';
        DB::table('comments')->insert([
          'email'=>$request->txtemail,
          'comment'=>$request->txtmsg,
          'user_id'=>$userid,
          'post_id'=>$request->postid,
      ]);
      //send mails
      $data= ['name'=>$request->txtemail,'data'=>"Hello Mr/Miss welcome weblog online blogging system App"];
      $user['to']= $request->txtemail;
      Mail::send('mail',$data, function($message) use ($user){
      $message->to( $user['to']);
      $message->subject("FeedBack Messages");
      });
      return redirect(route('blogsection'))->with('status','Thank u for your valuable feedback');
    }
   



    public function Searchedlink(string $cate){
     
  $post = DB::table('addposts')->Where('cate' ,$cate)->get(); 
  return view('searchpage1',['post'=>$post]);
}


}
