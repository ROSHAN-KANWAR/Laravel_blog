@extends('Layoutdash.Main')
@section('title')
    Share your favorite post with friends | Weblog Applications
@endsection
@section('main-section')
@if (Auth::user()->pay_status=="complete")                 
<div class="container recentpost">
  <div class="row  mb-4">
    <h2 class=" text-center p-1">Add Blog post</h2>
      <div class="col-md-10 d-block m-auto p-2">  
<form class=" mt-3" method="post" action="{{url('uploadpost')}}" enctype="multipart/form-data">
@csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
      <div class="col-md-12">
        <div class="form-outline mb-3">
          <label class="form-label" for="formtitle">Blog Tilte</label>
          <input type="text" name="title" id="formtitle" class="form-control" required/>
        </div>
      </div>
    <!-- titit; -->
    <div class="col-md-12">
    <div class="input-group mb-3">
      <label class="me-2" for="fileup">Upload</label>
      <input type="file" class="form-control-file"   name="photos" required 
          />
    </div>
    
    </div>
  <!-- file -->
  <div class="col-md-6 mb-3">
    <label class="form-label" for="form6Example1">Choose Category</label>
    <select class="form-select" name="cate" aria-label="Default select example" required>
      <option selected disabled>Select Category</option>
      @foreach ($cate as $cate)
     <option value="{{$cate->cate_name}}">{{$cate->cate_name}}</option>
     @endforeach
    </select>
  </div>
    <!-- cate or date-->

  <!-- writer -->
  <div class="col-md-12">

  <textarea class=" form-control" name="descrip"  cols="30" rows="10"></textarea>
    </div>

    </div>
    <!-- Submit button -->
    <button   class="btn btn-primary mt-4 btn-block d-block col-4 m-auto mb-4">Post</button>
  </form>

      </div>
  </div>
</div>


@else



@if(Auth::user()->pay_status!="complete")
<div class='alert alert-warning text-center '> Get More access -Try premium account ->
  <a href='{{route('paywithrazor')}}' style='color:blue;'>Click now</a>
</div> 
@endif



@endif


@endsection