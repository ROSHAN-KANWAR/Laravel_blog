@extends('Layouts.Main')
@section('title')
<title>Welcome Weblog team || Home Page</title>
@endsection
@section('main-section')
 <!-- Home page -->
 <div class="container mb-3 homepage">
    <div class="row mt-4">
        <div class="col-md-6 ">
            <div class="box m-4 ms-sm-0">
                <h1>We<span style="color:#1281c2 ;font-weight: 700;">blog</span></h1>
                <h3 class="text-center fw-bolder">Create your profile and <span style="color:#1281c2 ;"><a href="{{url('login')}}">Share Article</a></span>  </h3>
                <p class="text-center para">Marketing techniques have evolved as the ways in which consumers get
                    information change. Radio advertising led to TV advertising, which then shifted to digital
                    marketing with the rise of the internet. Besides these natural market progressions, the COVID-19
                    pandemic is driving the scope of digital marketing even further online. Digital marketing
                    enthusiasts everywhere have started to search and look around for the latest trends observed.
                </p>
                <form action="{{url('searchpage')}}" method="GET">
                <div class="input-group rounded">
                    <input type="search" name="search" class="form-control rounded  "
                        placeholder="Search your blog...."  aria-label="Search" aria-describedby="search-addon" />
                        <button id="search-button" type="submit" class="btn login">
                            <i class="fas fa-search"></i>
                        </button>
                        </div>
            </form>
            <div class="vblog">
                <a href="{{route('blogsection')}}" class="btn btn-primary btn-lg mt-5 get">View Blog<span>
                        <i class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
        </div>
        <div class="col-md-6 d-md-block d-none">
            <div class="box1">
                <img src="{{asset('Photos/home.svg')}}" alt="home page logo">
            </div>
        </div>
    </div>
</div>
<div class="scroll text-center text-secondary">
    <p class="mt-2">Scroll down</p>
    <i class="fas fa-arrow-down"></i>
</div>

<!-- Landing page -->

{{-- latest blogs --}}
@include('Homelayouts.Blog')

{{-- latest blogs --}}

{{-- community sections --}}
@include('Homelayouts.Community')

{{-- community sections --}}


{{-- service sections --}}
@include('Homelayouts.Service')

{{-- service sections --}}

{{-- teams sections --}}
@include('Homelayouts.Teams')

{{-- teams sections --}}
@endsection