
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Weblog Application - Premium Account</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <div class="card card-default">
                            <div class="card-header">
                               <h4> Premuim Account  - <b>30 Rs.</b>  (Testing Purpose)</h4>
                            </div>

                            <div class="card-body text-center">
                                <div class="col">
                                    <div class="card h-100 border-warning mb-3 mt-4">
                                      <div class="card-body">
                                      <h5 class="card-title">Feature :</h5>
                                        <ul style="list-style: none ;text-align:left">
                                            <li>Lorem ipsum dolor sit.</li>
                                            <li>Lorem ipsum dolor sit is the tahnk</li>
                                             <li>Lorem ipsum dolor sit or the</li>
                                             <li>Lorem ipsum dolor sit. testing </li>
                                             <li>Lorem ipsum dolor sit.</li>
                                             <li>Lorem ipsum dolor sit overvies</li>
                                        </ul>
                                      </div>
                                      
                                    </div>
                                  </div>
                                <a href="{{route('homeadmin')}}" class="btn btn-outline-danger btn-lg" >Cancel</a>
                           
                                <button onclick="Confirmpay()" id="rzp-button1" class="btn btn-success btn-lg">Make Payment</button>
                            </div>
                        </div>
                        <small class=" text-danger">Wait 5's after payment</small>
                  <br><br>
                    <a href="{{route('homeadmin')}}" class="btn btn-primary btn-lg" >Back to Home</a>
                </div>         
                </div>
            </div>
        </main>
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = 30;
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "NiceSnippets",
                "description": "Test Transaction",
                "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount},
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut(); 
                            });
                            $('.amount').val('');
                        }
                    });
                },
                "prefill": {
                    "name": "Mehul Bagda",
                    "email": "mehul.bagda@example.com",
                    "contact": "818********6"
                },
                "notes": {
                    "address": "test test"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>
    <script>
        function Confirmpay(){
            alert("Are you Sure Pay with Razorpay")
        }
    </script>
</body>
</html>