
<div class="recentpost mt-4">

    <div class="headall">
        <h4>Recent Payment</h4>
        <a href="{{route('payshow')}}">Show all</a>
    </div>
  
    <div class="table-responsive-sm payment">
    <table class="table ">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>User_id</th>
                <th>Status</th>
                <th>View</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($pay as $pay)
                <tr>
                    <td scope="row">{{$pay->id}}</td>
                    <td>{{$pay->user_id}}</td>
                    <td>Complete</td>
                    <td>
                        <a href="{{url('/payment_view' ,$pay->id)}}" target="_blank" rel="noopener noreferrer">
                           <i class=" fa-solid fa-eye"></i>
                         </a>
                      
                    </td>
                </tr>
              
                @endforeach
            
            </tbody>
    </table>
    </div>
</div>
