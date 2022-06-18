@extends('Layoutdash.Main')
@section('title')
All payment Detail Here | Weblog Apps
@endsection
@section('main-section')
                 @if ($paych=="complete")
   
<div class="recentpost mt-4">
    <h4>All Payment</h4>
    <div class="table-responsive-sm payment">
    <table class="table ">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Payment_id</th>
                <th>User_id</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pay as $pays)
                <tr>
                    <td scope="row">{{$pays->id}}</td>
                    <td>{{$pays->payment_id}}</td>
                    <td>{{$pays->user_id}}</td>
                   
                    <td>Complete</td>
                    <td>
                        <a href="{{url('/payment_view' ,$pays->id)}}" target="_blank" rel="noopener noreferrer">
                           <i class=" fa-solid fa-eye"></i>
                         </a>
                      
                    </td>
                </tr>
              
                @endforeach
           
            </tbody>
    </table>
    <div class="row text-center m-auto">
        {{$pay->links()}}
       </div>
    </div>
</div>



@else
{{-- <div class="premium">
    <h4>Testing Price - 3 rs.</h4>
    <ul>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
        <li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, provident.</p></li>
    </ul>
<div class="text-center">
    <a name="" id="" class="btn btn-primary" href="https://rzp.io/l/BZ53ParN7j" role="button">Pay Now</a>
</div>
</div> --}}
@if(Auth::user()->pay_status!="complete")
<div class='alert alert-warning text-center '> Get More access -Try premium account ->
  <a href='{{route('paywithrazor')}}' style='color:blue;'>Click now</a>
</div> 
@endif
    @endif

    @endsection