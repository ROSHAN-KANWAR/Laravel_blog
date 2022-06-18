@extends('Layoutdash.Main')
@section('title')
Welcome Admin Dashboard || All Comment Here
@endsection

@section('main-section')

<div class="recentpost">
    @if (session()->has('statusd'))
<div class="alert alert-danger">
    {{session('statusd')}}
</div>
    
@endif

    <h4>All Contact Messages</h4>
    <div class="table-responsive-sm comm">
    <table class="table">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
              
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($contact as $contacts)
                <tr>
                    <td scope="row">{{$contacts->id}}</td>
                    <td>{{$contacts->name}}</td>
                    <td>{{$contacts->email}}</td>
                   
                    <td>{{$contacts->sms}}</td>
                    <td>
                     
                        <a href="{{url('/contactdel' ,$contacts->id)}}"  rel="noopener noreferrer">
                            <i class=" fa-solid fa-trash ml-2"></i>
                        </a>
                    </td>
                </tr>
              
                @endforeach
           
            </tbody>
    </table>
    <div class="row text-center m-auto">
        {{$contact->links()}}
       </div>
</div>

</div>



@endsection
