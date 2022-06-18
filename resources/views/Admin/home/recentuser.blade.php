
<div class="recentuser">
    <div class="headall">
        <h4>Recent Users</h4>
        <a href="{{route('usershow')}}">Show all</a>
    </div>
  
    <div class="table-responsive-sm user">
<table class="table ">
    <thead class="thead-inverse">
        <tr>
            <th>No.</th>
            <th>Name</th>
            
            <th>Date</th>
           
        </tr>
        </thead>
        <tbody>
            @foreach ($userall as $userall)
            <tr>
                <td scope="row">{{$userall->id}}</td>
                <td>{{$userall->name}}</td>
               
                <td>{{$userall->created_at}}</td>
            </tr>
            @endforeach
  
        </tbody>
</table>
</div>
</div>