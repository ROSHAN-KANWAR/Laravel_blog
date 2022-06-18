<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/articlezone/">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
       
        @yield('title')     
</head>
<style>
    .login , .get{
  background-color: #1281c2;
  color: #fff;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  }
  .homepage{
      padding: 80px 0px
  }
  .pagination{
     padding-left: 0; 
     display: flex;
     flex-direction: row
     list-style: none; 
  }
 
.nav ul li{
    list-style: none;
    margin: 0px 1px;
    padding: 0px;
}
</style>