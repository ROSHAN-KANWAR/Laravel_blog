@extends('Layouts.Main')
@section('title')
<title>Welcome Weblog Teams || Blogs  Page</title>
@endsection
@section('main-section')
<div class="container">
     
    <!-- search -->
    <div class="row mt-5">
        @if (session()->has('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
         @endif 
        <div class=" col-md-8 col-8 d-block m-auto">
    
            <form action="" method="GET" autocomplete="off">
                <div class="input-group rounded">
                    <input type="search" name="search" class="form-control rounded "
                        placeholder="Search your blog...." aria-label="Search" aria-describedby="search-addon"/>
                        <button id="search-button" type="submit"  class="btn login">
                            <i class="fas fa-search"></i>
                        </button>

                        </div>
         

            </form>

        </div>
    </div>
        <!-- search -->
</div>

 <!-- blog card -->
 <div class="container mb-4 mt-3">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
        @foreach ($post as $posts)
        {{-- <a href="{{url('/blogview/'.$posts->cate.'/'.$posts->slugurl)}}" target="_parent" style="text-decoration: none ; color:black">  --}}
            <a href="{{url('/blogview/'.$posts->cate.'/'.$posts->slugurl)}}" target="_parent" style="text-decoration: none ; color:black"> 
        <x-blogcard title="{{$posts->title}}" image="{{asset('addpost_image/'.$posts->photos)}}"/>
        </a>
      
        @endforeach   
      
        <!-- carditems -->
    </div>
    </div>
      
    <!-- blog card -->
    <div class="nav text-center m-auto d-block mt-5">
    {{$post->links()}}
</div>

@endsection

