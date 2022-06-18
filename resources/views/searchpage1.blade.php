@extends('Layouts.Main')
@section('title')
<title>Searched Results 1</title>
@endsection
@section('main-section')
<div class="container row col-md-8 col-8 mt-4 mb-4 m-auto d-block">
<form action="{{url('searchpage')}}" method="GET">
    <div class="input-group rounded">
        <input type="search" name="search" class="form-control rounded  "
            placeholder="Search your blog...."  aria-label="Search" aria-describedby="search-addon" />
            <button id="search-button" type="submit" class="btn login">
                <i class="fas fa-search"></i>
            </button>
            </div>
</form>
</div>
<div class="container mb-4 mt-3">

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
       @forelse ($post as $posts)
       <a href="{{url('/blogview/'.$posts->cate.'/'.$posts->slugurl)}}" target="_parent" style="text-decoration: none ; color:black">
                      
        <x-blogcard title="{{$posts->title}}" image="{{asset('addpost_image/'.$posts->photos)}}"/>
        </a>  
       @empty
       <div class="text-center">
       <p class="alert alert-danger">No record Found</p>
    </div>
       @endforelse
       
    </div>
  
        </div>

    @endsection