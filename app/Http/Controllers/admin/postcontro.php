<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\addpost;
use Illuminate\Support\Facades\Auth;
class postcontro extends Controller
{
    public function Postshow(){
        
        if (Auth::user()->usertype == "1") {
            $post = DB::table('addposts')->orderByDesc('id')->paginate(10);
  
        } else {

            $post = DB::table('addposts')->where('userid' ,Auth::id())->orderByDesc('id')->paginate(10);
  
        }
        
           return view("Admin.post" ,['post' => $post]);
    }

        public function Postedit($id){
          
          if(Auth::id()== addpost::find($id)->userid){
            $cate = DB::table('categories')->get();
            // $addposts = addpost::where('userid' ,$use)->where('id' ,$id)->get();
          $addposts=DB::table('addposts')->find($id);
            return view('Admin.postedit',['addposts'=>$addposts ,'cate'=>$cate]);
        }
            else{
             return redirect()->back();
            }
        }

      public function Postupdate(Request $request, $id){
        $post =  addpost::find($id);
        $photos = $request->photos;
  
        if($photos){
            $photos_name= time().'.'.$photos->getClientoriginalExtension();
            $request->photos->move('addpost_image',$photos_name); 
            $post->photos = $photos_name;
        }
      
        $post->title= $request->title;
        $post->cate= $request->cate;   
        $post->descrip= $request->descrip;
   
       $post->save();
      
      return redirect(route('postshow'))->with('status','Post Updated Successfull');
  
}


    public function Postdes($id)
    {
        $addposts=DB::table('addposts')->where('id',$id)->delete();
        return redirect(route('postshow'))->with('status','Post  Delete Successfull');
  
    }

// all post for user
public function Postshowall(){
    $post = DB::table('addposts')->orderByDesc('id')->paginate(10);
    return view("Userdash.alluserpost" ,['post' => $post]);
}
}
