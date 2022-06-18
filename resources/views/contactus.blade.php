@extends('Layouts.Main')
@section('title')
<title>Welcome Weblog team || Home Page</title>
@endsection
@section('main-section')
 <!-- contactus -->
 <div class="container">
    
    <div class="row mt-2">
        @if (session()->has('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
         @endif  
    <div class="urlpath">
<a href="index.php">Home</a><span>>></span><a href="blog.php">Blog</a><span>>></span>
</div>
        
        <h2 class="  text-center mt-2">Contact</h2>
        <p class="  text-center para">When it comes to marketing, products are only half the story. The other half
            is how you present your product in a way that engages your audience. Blog content is what drives traffic
            to your website - without it, you're not going to be able to sell anything.
            Topic: How to Sell Your Products Online With Ecommerce Website Templates
            tone: professional</p>
        <div class="col-md-6 col-10 d-block m-auto mt-3">
            <form name="userinfo " action="{{route('contactus')}}" method="POST" >
               @csrf
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example1">Name</label>
                    <input type="text" id="form4Example1" class="form-control" value="{{ old('txtname') }}" name="txtname"
                        placeholder="Enter your name"  />
                        @error('name')
                        <p class=" text-danger"> {{ $message }}</p>
                        @enderror
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example2">Email address</label>
                    <input type="email" id="form4Example2" name="txtemail" {{ old('txtemail') }} class="form-control"
                        placeholder="Enter valid email"  />
                        @error('email')
                        <p class=" text-danger"> {{ $message }}</p>
                    
                        @enderror
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form4Example3">Message</label>
                    <textarea class="form-control" id="form4Example3" {{ old('txtmsg') }} name="txtmsg" rows="4"></textarea>
                    @error('sms')
                    <p class=" text-danger"> {{ $message }}</p>
                    
                    @enderror
                </div>
                <!-- Submit button -->
                <input type="submit" class=" login btn btn-primary col-md-6 d-block m-auto btn-block mb-4"  value="Submit"/>
            </form>
        </div>
        <div class="col-md-6 bg-light mt-3 text-center p-2">
            <h2 style=" color:rgb(33, 125, 231)">Startzone : Web Developers Team</h2>
            <p>StarZone is a premier Digital Agency that provides businesses in and around Columbus, OH and beyond
                with services like YouTube Management, Instagram Management, Content Creation, Social Media
                Management.</p>
            <p>Address : Korba</p>
            <p>Call :<a href="tel:+918120481377">(+91)-9876547899</a></p>
            <p>Open : 24/7</p>
        </div>
    </div>
    <!-- 
other links -->
    <div class="row mt-5">

    </div>
    <!-- 
other links -->
</div>
<!-- contactus -->
<!-- footer -->



@endsection