<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <base href="/articlezone/">
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/dash/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.css')}}">        <title>Premium Account Hoga</title>    
</head>
<style>
    .cancelpay{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between
    }
</style>
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
             <li class="{{Request::routeIs('homeadmin') ? 'active' : ""}}"><a  href="{{route('homeadmin')}}" class="hero"> <i class=" fas fa-home"></i> <span class="hero">Home</span> </a></li>
             <li class="{{Request::routeIs('postshow') ? 'active' : ""}}"><a href="{{route('postshow')}}" ><i class="fa-solid fa-share-alt"></i><span>Post</span></a></li>
             <li class="{{Request::routeIs('addpost') ? 'active' : ""}}"><a href="{{route('addpost')}}"><i class="fa-solid fa-circle-plus"></i> <span>Add</a></li>
             <li class="{{Request::routeIs('comshow') ? 'active' : ""}}"><a href="{{route('comshow')}}"> <i class="fa-solid fa-comment"></i><span>Comment</span></a></li>
             <li class="active"><a href="{{route('payshow')}}"> <i class="fa-solid fa-indian-rupee-sign"></i><span>Pay</span></a></li>
             <li class="{{Request::routeIs('detailshow') ? 'active' : ""}}"><a href="{{route('detailshow')}}"><i class="fa-solid fa-circle-info"></i> <span>Details</span></a></li>
            
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
                <a href="{{route('homeadmin')}}">  <h5>Dashboard</h5></a>
                
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
                 <!-- dashboard code -->

          </div>
      </div>
           <!-- dashboard code -->
              <footer class="footers-dash">
                  <div class="container footer--flex">
                    <div class="footer-start">
                      <p>2021 © Abhidhateam Dashboard - <a href="abhidha.com" target="_blank"
                          rel="noopener noreferrer">abhidhateams.com</a></p>
                    </div>
                    <ul class="footer-end">
                      <li><a href="{{route('index')}}">Home</a></li>
                      <li><a href="{{route('blogsection')}}">Blog</a></li>
                      <li><a href="{{route('contactus')}}">Contact</a></li>
                    </ul>
                  </div>
                </footer>    
          </div>
      
      
          <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
          integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
<script src="{{asset('js/dash.js')}}"></script> 

<script src="{{asset('js/bootstrap.min.js')}}"></script> 

<script src="{{asset('js/script.js')}}"></script> 
 
   
</body>
</html>




