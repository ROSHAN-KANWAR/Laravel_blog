@include('Layoutdash.Header')
{{-- body part start --}}
<body>
  <div class="containers">
    {{-- main header hai --}}
    <div class="header" id="header">
        <div class="brand">
            <i class="fa-solid fa-align-left" onclick="Closebtn()"></i> 
            <a href="{{route('index')}}">
              <h2>WeBlog</h2>
            </a>
            
        </div>
    
     <div class="navigations">
     <ul>

        @if (Auth::check() && (Auth::user()->usertype==1))
        <li class="{{Request::routeIs('homeadmin') ? 'active' : ""}}"><a  href="{{route('homeadmin')}}" class="hero"> <i class=" fas fa-home"></i> <span class="hero">Home</span> </a></li>
        <li class="{{Request::routeIs('postshow') ? 'active' : ""}}"><a href="{{route('postshow')}}" ><i class="fa-solid fa-share-alt"></i><span>Post</span></a></li>
        <li class="{{Request::routeIs('usershow') ? 'active' : ""}}"><a href="{{route('usershow')}}"><i class="fas fa-user-group"></i><span>Users</span> </a></li>
        <li class="{{Request::routeIs('cateshow') ? 'active' : ""}}"><a href="{{route('cateshow')}}" > <i class="fa-regular fa-face-smile"></i><span>Category</span></a></li>
        <li class="{{Request::routeIs('addpost') ? 'active' : ""}}"><a href="{{route('addpost')}}"><i class="fa-solid fa-circle-plus"></i> <span>Add</a></li>
        <li class="{{Request::routeIs('comshow') ? 'active' : ""}}"><a href="{{route('comshow')}}"> <i class="fa-solid fa-comment"></i><span>Comment</span></a></li>
        <li class="{{Request::routeIs('contact') ? 'active' : ""}}"><a href="{{route('contact')}}"> <i class="fa-solid fa-address-book"></i><span>Contact</span></a></li>
        <li class="{{Request::routeIs('payshow') ? 'active' : ""}}"><a href="{{route('payshow')}}"> <i class="fa-solid fa-indian-rupee-sign"></i><span>Pay</span></a></li>
        <li class="{{Request::routeIs('detailshow') ? 'active' : ""}}"><a href="{{route('detailshow')}}"><i class="fa-solid fa-circle-info"></i> <span>Profile</span></a></li>
        @else
        <li class="{{Request::routeIs('homeadmin') ? 'active' : ""}}"><a  href="{{route('homeadmin')}}" class="hero"> <i class=" fas fa-home"></i> <span class="hero">Home</span> </a></li>
        <li class="{{Request::routeIs('postshow') ? 'active' : ""}}"><a href="{{route('postshow')}}" ><i class="fa-solid fa-share-alt"></i><span>Post</span></a></li>
        <li class="{{Request::routeIs('addpost') ? 'active' : ""}}"><a href="{{route('addpost')}}"><i class="fa-solid fa-circle-plus"></i> <span>Add</a></li>
        <li class="{{Request::routeIs('comshow') ? 'active' : ""}}"><a href="{{route('comshow')}}"> <i class="fa-solid fa-comment"></i><span>Comment</span></a></li>
        <li class="{{Request::routeIs('payshow') ? 'active' : ""}}"><a href="{{route('payshow')}}"> <i class="fa-solid fa-indian-rupee-sign"></i><span>Pay</span></a></li>
        <li class="{{Request::routeIs('detailshow') ? 'active' : ""}}"><a href="{{route('detailshow')}}"><i class="fa-solid fa-circle-info"></i> <span>Profile</span></a></li>
        
        @endif            
     </ul>
    </div>
  
    </div>
    {{-- main header hai --}}

    {{-- menu bar with image --}}
    <div class="dashboard" id="dashboard">
      <div class="topheader" id="closebtn">
          <div class="closebtn" >
              <i class="fa-solid fa-align-left" onclick="Closebtn()"></i>
          </div>
          <div class="heades">
            <a href="{{route('homeadmin')}}" style="text-decoration: none">  <h5>Dashboard</h5></a>
            
          </div>
          <div class="profilephoto">
               
                {{-- <img src="{{asset('Photos/meh.webp')}}" alt=""> --}}
                <x-app-layout>
   
                </x-app-layout>
          
          </div>
         </div>
         <!-- course complete -->
         <div class="contentbox  p-4">
      
  <div class="container mt-5">
      <div class="row">
        @if (session()->has('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>  
        @endif
        @if (session()->has('statusd'))
        <div class="alert alert-danger">
            {{session('status')}}
        </div>
        @endif
             <!-- dashboard code -->
             @yield('main-section')
    
     <!-- dashboard code -->
            </div>
    </div>
    </div>
@include('Layoutdash.Footer')