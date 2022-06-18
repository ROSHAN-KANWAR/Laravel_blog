@extends('Layoutdash.Main')
@section('title')
|| Welcome User Dashboard ||
@endsection

@section('main-section')
{{-- icon box --}}
{{-- payment link able --}}
{{-- {{$payst}} --}}
@if($payst!="complete")
<div class='alert alert-warning text-center '> Get More access -Try premium account ->
  <a href='{{route('paywithrazor')}}' style='color:blue;'>Click now</a>
</div> 
@endif

<div class="headall">
  <p class="">Welcome User- <b>{{Auth::user()->name}}</b></p>
 
   <a name="" id="" style=" color:rgb(1, 5, 8)" class="btn btn-warning" href="{{route('addpost')}}" role="button">Add Post</a>
  </div>
@include('Admin.home.icon')
{{-- icon box --}}

{{-- recent post & pay --}}
<div class="col-md-7 mt-4 mb-2">
  @include('Admin.home.recentpost')
  @include('Admin.home.newpost')
</div>

@endsection

