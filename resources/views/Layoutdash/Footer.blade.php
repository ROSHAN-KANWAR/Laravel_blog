{{-- razorpay --}}

{{-- <script>
window.addEventListener('contextmenu',function(e){
e.preventDefault()
},false);
</script> --}}
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('js/dash.js')}}"></script> 

<script src="{{asset('js/bootstrap.min.js')}}"></script> 

<script src="{{asset('js/script.js')}}"></script> 

<script src="{{asset('plugins/chart.min.js')}}"></script> 

<script src="{{asset('plugins/feather.min.js')}}"></script>  
   

 
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

</body>
</html>








