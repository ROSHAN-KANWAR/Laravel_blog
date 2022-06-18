@extends('Layouts.Main')
@section('title')
<title>Welcome Weblog Teams || Blogs  Page</title>
@endsection
@section('main-section')
<div class="container">
     

    <div class="container detail">

         <div class="urlpath mt-4">
    <a href="index.php">Home</a><span>>></span><a href="blog.php">Blog</a><span>>></span><p></p>
    </div>
    <div class="row mt-3">
      {{-- content body --}}
            <div class="col-lg-8 col-md-8 col-sm-12 mt-4 ">
                <div class="full">
                    <h4 class="">{{$post->title}}</h4>
                    <p class="">Date :{{$post->created_at}} </p>
                    <p class="">Post By :<span style="color:#1281c2 ;font-weight: 700;">roshan kanwar</span> </p>
                  
                    <img src="{{asset('addpost_image/'.$post->photos)}}" alt="blog photo"
                        class=" img-responsive img-fluid  rounded-start mt-5" >
          
                        <p class="mt-5" style="text-align: justify;">
                          {{$post->descrip}}
                        </p>
                    </div>
        </div>
        {{-- content body --}}
        <!-- popular blog sections -->
        <div class="col-md-4 col-sm-12 bg-light">
  <div class="col-sm-12 mb-3">
    <h4 class=" mt-3">{{$post->cate}} - Related Post </h4>
   
   @foreach ($relatepost as $item)
   <div class="card mb-2">
    <div class="card-body">
      <h5 class="card-title">{{$item->title}}</h5>
      <p class="card-text">Publish : {{$item->created_at}}</p>
      <a href="{{url('/blogview/'.$item->cate.'/'.$item->slugurl)}}" class="login btn ">Read More</a>
    </a>
  </div>
  </div>
   @endforeach
  



  </div>        
            <!-- blog -->
                    {{-- all category --}}
                <div class="row mt-2 mb-3">
<div class="col-md-10 col-10 d-block  m-auto">
  <h4>All category :</h4>  
   
<ul style=" list-style-type: none">
  @foreach ($categ as $item)
    <a href="{{url('/searchlink' ,$item->cate_name)}}"><li class="" style=" text-decoration:none ; font-size:20px">{{$item->cate_name}}</li>
    </a>
  @endforeach
</ul>
</div>
                </div>
        </div>

</div>
        <!-- blog deatail -->
    </div>
<!-- comment system -->
<div class="container mt-5  ">
    <h2>Leave Comment</h2>
    <div class="row">
        <div class="col-md-6 m-auto">
            <!-- data submit -->
         
         <form  action="{{route('commentsave')}}" method="POST" >
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Email : </label>
                    <input type="email" id="form4Example1" class="form-control" name="txtemail"
                        placeholder="Enter your email "  />
                </div>
             <input type="hidden" value="{{$post->id}}" name="postid" id="">

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Leave your comment :</label>
                    <textarea class="form-control" id="form4Example3"  name="txtmsg" rows="3"></textarea>
               <p>After admin approve show message</p>
                  </div>
                <!-- Submit button -->
                <input type="submit" value="Send"  class=" login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"
                >
            </form>
 
    </div>
</div>


{{-- comments show --}}
<div class="row col-md-8 m-auto col-10">
 
@forelse ($comm as $item)
<div class="col-sm-6">
  <div class="card mb-2">
    <div class="card-body">
      <h5 class="card-title"><i class="far fa-user mt-1"></i> : {{$item->email}}</h5>
      <p class="card-text"><i class="fas fa-envelope mt-1"></i> : {{$item->comment}}</p>
    </div>
  </div>
</div>
@empty
    <p class="alert alert-danger">No record Found</p>
@endforelse
</div>
</div>

<!-- comment system -->
    <!-- popukat coding -->
<div class="container">
    
    <!-- importNT LINKs -->
    <div class="row mt-5">
        <h2 class="text-center">Important Links</h2>
        <div class="col-10 imp d-block m-auto">
            1. <a href="#">Learn what digital marketing is and how it works</a>
            <br> <br>
            2. <a href="#">Want To Understand What Is SEO And How It Works?</a>
            <br> <br>
            4. <a href="#">The Top 7 Digital Marketing Mistakes To Avoid When Starting</a>
            <br> <br>
            5. <a href="#">How Digital Marketing Helps to Grow Your Business</a>
            <br> <br>
            6. <a href="#">20 Must-have digital marketing tools to help you grow</a>
            <br> <br>
            8. <a href="#">10 essential tools for digital marketing</a>
            <br> <br>

            3. <a href="#">Top 10 Digital Marketing Agencies in India.</a>
            <br> <br>
            4. <a href="#">Digital marketing strategy</a>
        </div>

    </div>
    </div>
    </div>
 
@endsection
