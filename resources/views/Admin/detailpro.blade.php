@extends('Layoutdash.Main')
@section('title')
Profile details Here | Weblog Apps
@endsection
@section('main-section')
<div class="profilediv">
    <div class="imagessec">
        <div class="prophoto">
            
        <img src="{{asset('Photos/meh.webp')}}" alt="">
       </div>
        <h4>{{$profile->name}}</h4>
        <div class="changepro">
            <p>Profile Photo</p>
      
       </div>
    </div>
    <div class="detailsec">
        <h2>Detail</h2>
       <div class="fulldetail">
           <div class="row-1">
           <label for="">Name : </label>
           <h4>{{$profile->name}}</h4>
       </div>
       <div class="row-1">
           <label for="">Email :</label>
           <h4>{{$profile->email}}</h4>
       </div>
       <div class="row-1">
           <label for="">Create_at :</label>
           <h4>{{$profile->created_at}}</h4>
       </div>
       <div class="row-1">
        <label for="">Updated_at :</label>
        <h4>{{$profile->updated_at}}</h4>
    </div>
       
       </div>
       
    </div>
</div>


@endsection