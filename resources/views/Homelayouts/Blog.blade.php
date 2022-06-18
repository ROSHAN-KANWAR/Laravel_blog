<section class=" container text-center mt-5 mb-5">
    <div class="row ">
        <h2 class=" text-center" style=" font-weight: bold;">LATEST BLOG</h2>
        <p class="para  text-center">Because most consumers use smartphones and research products online before
            buying, digital marketing strategies are crucial to businesses. But companies across the globe also
            employ digital marketing to more easily target their audiences online and via mobile devices — and many
            are seeing a significant return on investment (ROI) because of these efforts.</p>
          
    </div>  
 
    <div class="row row-cols-1 row-cols-md-3 g-4">
   {{-- all blog to db --}}
   @foreach ($post as $post)
   <a href="{{url('/blogview/'.$post->cate.'/'.$post->slugurl)}}" target="_parent" style="text-decoration: none ; color:black">
        
   <x-blogcard title="{{$post->title}}" image="{{asset('addpost_image/'.$post->photos)}}"/>
   </a>
   @endforeach

   
    </div>
    <div class="row mt-4">
<div class="col-md-4 m-auto d-block viewmore">
<a href="{{route('blogsection')}}" class="">View More</a>
</div>
</div>
</section>
