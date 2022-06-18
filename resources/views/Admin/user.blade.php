@extends('Layoutdash.Main')
@section('title')
 Welcome Admin Dashboard || All Users Here
@endsection

@section('main-section')

<div class="recentuser">
    <h4>All Users</h4>
    <div class="table-responsive-sm user">
<table class="table ">
    <thead class="thead-inverse">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
          
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($userall as $useralls)
            <tr>
                <td scope="row">{{$useralls->id}}</td>
                <td>{{$useralls->name}}</td>
                <td>{{$useralls->email}}</td>
                <td>{{$useralls->created_at}}</td>
                <td>
                    <a href="/user/profile  " target="_blank" rel="noopener noreferrer">
                        <i class=" fa-solid fa-edit ml-2 mb-2"></i>
                    </a>
                    {{-- <a href="#" target="_blank" rel="noopener noreferrer">
                        <i class=" fa-solid fa-trash ml-2"></i>
                    </a> --}}
                </td>

            </tr>
            @endforeach
          </tbody>
</table>
<div class="row text-center m-auto">
    {{$userall->links()}}
   </div>
</div>
</div>
@endsection