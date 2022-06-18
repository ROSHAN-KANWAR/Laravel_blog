@extends('Layoutdash.Main')
@section('title')
All Comment Here | Weblog Apps
@endsection
@section('main-section')

<div class="recentpost">

    <h4>All Comment</h4>
    <div class="table-responsive-sm comm">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>S.No.</th>
                <th>Sms</th>
                <th>Email</th>
                <th>Post_id</th>
                <th>User_id</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @forelse($comment as $comments)
                <tr>
                    <td scope="row">{{$comments->id}}</td>
                    <td>{{$comments->comment}}</td>
                    <td>{{$comments->email}}</td>
                    <td>{{$comments->post_id}}</td>
                    <td>{{$comments->user_id}}</td>
                    <td>

                        <a href="{{url('/comapprove' ,$comments->id)}}" rel="noopener noreferrer">
                         @if ($comments->status=="approved")
                         <span>Approved</span>  
                         @else
                         <span>Approve</span>    
                         @endif 
                        </a>
                        <a href="{{url('/comdel' ,$comments->id)}}"  rel="noopener noreferrer">
                            <i class=" fa-solid fa-trash ml-2"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <p class="text-center alert alert-danger">No Comment Here ..</p>
                @endforelse
       
           
            </tbody>
    </table>
    <div class="row text-center m-auto">
        {{$comment->links()}}
       </div>
</div>

</div>



@endsection
