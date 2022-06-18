@extends('Layoutdash.Main')
@section('title')
 Welcome Admin Dashboard || All Category Here
@endsection

@section('main-section')

<div class="recentpost">

    <h4>All Category</h4>
    <div class="table-responsive-sm cate">
    <table class="table ">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Name</th>
               
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($cate as $cate)
                <tr>
                    <td scope="row">{{$cate->id}}</td>
                    <td>{{$cate->cate_name}}</td>
                    
                    <td>
                        <a href="{{url('/delete',$cate->id)}}"><i class=" fa-solid fa-trash"></i>
                        </a>

                    </td>
                        </tr>
              @endforeach
            </tbody>
    </table>
    </div>
</div>





@endsection
