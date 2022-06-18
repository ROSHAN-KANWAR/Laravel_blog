
<div class="recentpost">
    <div class="headall">
        <h4>New Post Uploaded</h4>
        <a href="{{route('postshowall')}}">Show all</a>
    </div>
  
    <div class="table-responsive-sm post">
    <table class="table ">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Category</th>
                <th>Created_at</th>
                <th>Read</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($post as $post)
                    <tr>
                    <td scope="row">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->cate}}</td>
                    
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="{{url('/blogview/'.$post->cate.'/'.$post->slugurl)}}" target="_blank" rel="noopener noreferrer">
                            <span style=" color:blue;border-bottom:1px solid bluw">Read</span>
                        </a>
                       
                    </td>
                </tr>
                @endforeach
              
            </tbody>
    </table>
    
</div>

</div>
