@extends('Layoutdash.Main')
@section('title')
    Main Dashboard | Weblog Applications
@endsection
@section('main-section')
<div class="headall">
    <p class="">Welcome - <b>{{Auth::user()->name}}</b></p>
   <a name="" id="" style=" color:rgb(1, 5, 8)" class="btn btn-warning" href="{{route('addpost')}}" role="button">Add Post</a>
  </div>
@include('Admin.home.icon')
{{-- icon box --}}

{{-- recent post & pay --}}
<div class="col-md-7 mt-4 mb-2">
  @include('Admin.home.recentpost')
  @include('Admin.home.recentpay')
</div>
<div class="col-md-5 mt-4 mb-2">
  
    @include('Admin.home.recentuser')
</div>
@endsection

