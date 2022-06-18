@include('Layouts.Header')
{{-- body part start --}}
<body onload="preload()">
    <div id="preloader"></div>
    <div class="container-fluid maxfix">
        <div class="row">
            <div class="col-md-12 ">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{route('index')}}" class="fw-bolder">
                            <img src="{{asset('Photos/lg.JPG')}}" alt="" width="100" height="42" class="">
                            <!-- <span class="logo">Startzone</span> -->
                            </a>
                        <div class="navbar-toggler"  data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class=""><i class="fas fa-sliders-h fa-3 text-dark"></i></span>
                        </div>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="{{Request::routeIs('index') ? 'active' : ''}}" aria-current="page" href="{{route('index')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{Request::routeIs('blogsection') ? 'active' : ''}}" href="{{route('blogsection')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{Request::routeIs('aboutus') ? 'active' : ''}}" href="{{route('aboutus')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{Request::routeIs('contactus') ? 'active' : ''}}" href="{{route('contactus')}}">Contact</a>
                                </li>
                            </ul>   
                         @if (Route::has('login'))
                             @auth
                             <a href="{{route('homeadmin')}}" class="btn btn-warning  d-flex pro fw-bolder">Dashboard</a>
                         @else
                         <a href="{{route('login')}}" class="btn login  d-flex pro fw-bolder">Login</a>
                         @endauth    
                         @endif
                             
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    {{-- all content --}}
@yield('main-section')
 {{-- all content --}}
{{-- footer --}}
<div class="container-fluid mt-5">
    <div class="row bg-light p-3 mt-4">
        <!-- site logo and info -->
        <div class="col-md-3">
            <img src="{{asset('Photos/logo.svg')}}" class="w-25 h-25 img-fluid rounded" alt="">
            <br> <br>
            <p>Startzone Developer Team that delivers Website & Mobile Apps service to
                the Businesses, Start-ups, Institution etc.</p>
        </div>
        <!-- site logo and info end-->
        <!-- site contact -->
        <div class="col-md-3 mt-1">
            <h2 class="">Contact us</h2>
            <p>Email: support@startzone.com</p>
            <p>Call : <a href="tel:+91980000000">(+91)-9876547899</a></p>
            <p>Address: Korba,Chhattisgarh State, India, Postal Code 543212</p>
        </div>
        <!-- site contact end-->
        <div class="col-md-3">
            <h3>Important links</h3>
            <a href="">Course</a><br>
            <a href="">SEO Management</a><br>
            <a href="">Customer Care</a><br>
            <a href="">Consultancy</a>
        </div>
        <!-- sites Follow page -->
        <div class="col-md-3 col-sm-3 mt-1 ">
            <h3>Follow Us</h3>
                                         <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-google"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-twitter"></i>
                                        </button>

                                        <button type="button" class="btn btn-primary btn-floating mx-1 mb-1">
                                            <i class="fab fa-github"></i>
                                        </button>
                                   
        </div>
        <!-- sites Follow page end -->
    </div>
    <!-- sites contact details and info  end-->
    <!-- footers details -->
    <div class="row">
        <div class="col-md-12 bg-dark text-white p-1">
            <p class="pt-2 ml-2 text-center"> @2021 startzone || All Rights Reserved</p>
        </div>
    </div>
</div>

@include('Layouts.Footer')