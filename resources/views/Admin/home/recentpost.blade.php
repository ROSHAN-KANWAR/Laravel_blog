
<div class="recentpost">
    <div class="headall">
        <h4>Recent Post</h4>
        <a href="{{route('postshow')}}">Show all</a>
    </div>
  
    <div class="table-responsive-sm post">
    <table class="table ">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Category</th>
                <th>User_id</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                
                @foreach ($post as $post)
                    <tr>
                    <td scope="row">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->cate}}</td>
                    
                    <td>{{$post->userid}}</td>
                    <td>
                        @if (Auth::user()->usertype=="1")
                        <a href="{{url('/postdel',$post->id)}}"  rel="noopener noreferrer">
                            <i class=" fa-solid fa-trash ml-2"></i>
                        </a>
                        @else

                        <a href="{{url('/postedit',$post->id)}}"  rel="noopener noreferrer">
                            <i class=" fa-solid fa-edit ml-2 mb-2"></i>
                        </a>
                        <a href="{{url('/postdel',$post->id)}}"  rel="noopener noreferrer">
                            <i class=" fa-solid fa-trash ml-2"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
              
            </tbody>
    </table>
    
</div>

</div>
