@extends('Layoutdash.Main')
@section('title')
Share your favourite post by weblogs
@endsection

@section('main-section')

<div class="container recentpost">
    <div class="row  mb-4">
      <h2 class=" text-center p-1">Edits Blog post</h2>
        <div class="col-md-10 d-block m-auto p-2">  
<form class=" mt-3" method="post" action="" enctype="multipart/form-data">
  @csrf
  @method('PUT')
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="form-outline mb-3">
            <label class="form-label" for="formtitle">Blog Tilte</label>
            <input type="text" name="title" id="formtitle" class="form-control" value="{{$addposts->title}}" required/>
          </div>
        </div>
        <input type="hidden" name="id" id="" value="{{$addposts->id}}">
      <!-- titit; -->
      <div class="col-md-12">
      <div class="input-group mb-3">
        <label class="me-2" for="fileup">Upload</label>
        <input type="file" class="form-control-file"   name="photos"
            />
              </div>
             
              <p>Previous Images</p>
              <img src="{{asset('addpost_image/'.$addposts->photos)}}" alt="" style="width:100px">
   <br>  
      </div>
    <!-- file -->
    <div class="col-md-6 mb-3">
      <label class="form-label" for="form6Example1">Choose Category</label>
      <select class="form-select" name="cate" aria-label="Default select example" required>
        <option selected>{{$addposts->cate}}</option>
        @foreach ($cate as $cate)
        <option value="{{$cate->cate_name}}">{{$cate->cate_name}}</option>
        @endforeach
      </select>
    </div>
      <!-- cate or date-->
 
    <!-- writer -->
    <div class="col-md-12">

    <textarea class=" form-control" name="descrip"  id="editor" cols="30" rows="10">{{$addposts->descrip }}</textarea>
      </div>

      </div>
      <!-- Submit button -->
      <button   class="btn btn-primary mt-4 btn-block d-block col-4 m-auto mb-4">Post</button>
    </form>
  
        </div>
    </div>
</div>


@endsection