@extends('Layoutdash.Main')
@section('title')
   All Post Here | Weblog Applications
@endsection
@section('main-section')
                 @if (Auth::user()->pay_status=="complete")                 
                 <div class="recentpost">
                 
                     <h4>All Post</h4>
                     <div class="table-responsive-sm post">
                     <table class="table ">
                         <thead class="thead-inverse">
                             <tr>
                                 <th>No.</th>
                                 <th>Title</th>
                                 <th>Category</th>
                                 <th>images</th>
                                 <th>Date</th>
                                 <th>User_id</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                                 @forelse ($post as $posts)
                                     <tr>
                                     <td scope="row">{{$posts->id}}</td>
                                     <td>{{$posts->title}}</td>
                                     <td>{{$posts->cate}}</td>
                                     <td>{{$posts->photos}}</td>
                                     <td>{{$posts->created_at}}</td>
                                     <td>{{$posts->userid}}</td>
                                     <td>
                                         @if (Auth::user()->usertype=="1")
                                         <a href="{{url('/postdel',$posts->id)}}"  rel="noopener noreferrer">
                                            <i class=" fa-solid fa-trash ml-2"></i>
                                        </a> 
                                        @else
                                        <a href="{{url('/postedit',$posts->id)}}"  rel="noopener noreferrer">
                                            <i class=" fa-solid fa-edit ml-2 mb-2"></i>
                                        </a>
                                        <a href="{{url('/postdel',$posts->id)}}"  rel="noopener noreferrer">
                                           <i class=" fa-solid fa-trash ml-2"></i>
                                       </a> 
                                         @endif
                                         
                                        
                                     </td>
                                 </tr>
                                 @empty
                                     <p class="text-center alert alert-danger">No Post Here ..</p>
                                 @endforelse
                        
                             </tbody>
                     </table>
                     
                 </div>
                 <div class="row text-center m-auto">
                     {{$post->links()}}
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