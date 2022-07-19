
<!DOCTYPE html>

<html>



<head>

    <!-- meta tag -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">



    <!-- favicon-icon  -->



    <!-- font-awsome css  -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/font-awsome.css') !!}">



    <!-- fonts css -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/fonts/fonts.css') !!}">



    <!-- bootstrap css -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/bootstrap.min.css') !!}">



    <!-- fancybox css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



    <!-- owl.carousel css -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/owl.carousel.min.css') !!}">



    <link href="{!! asset('assets/plugins/sweetalert/css/sweetalert.css') !!}" rel="stylesheet">

    <!-- style css  -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/style.css') !!}">



    <!-- responsive css  -->

    <link rel="stylesheet" type="text/css" href="{!! asset('front/css/responsive.css') !!}">



</head>



<body>



<div id="success-msg" class="alert alert-dismissible mt-3" style="display: none;">

    <span id="msg"></span>

</div>



<div id="error-msg" class="alert alert-dismissible mt-3" style="display: none;">

    <span id="ermsg"></span>

</div>





<section class="signup-sec">

    <img src='{!! asset("assets/images/bg.jpg") !!}' class="bg-img" alt="">

    

    @if ($errors->login->first('email') && $errors->login->first('mobile'))

        <div class="alert alert-danger" style="text-align: center;">

            {{ $errors->login->first('email') }} {{ $errors->login->first('mobile') }}

        </div>

    @elseif ($errors->login->first('email'))

        <div class="alert alert-danger" style="text-align: center;">

            {{ $errors->login->first('email') }}

        </div>

    @elseif ($errors->login->first('mobile'))

        <div class="alert alert-danger" style="text-align: center;">

            {{ $errors->login->first('mobile') }}

        </div>

    @endif

    @if ($errors->login->first('name'))

        <div class="alert alert-danger" style="text-align: center;">

            {{ $errors->login->first('name') }}

        </div>

    @endif

    @if ($errors->login->first('password'))

        <div class="alert alert-danger" style="text-align: center;">

            {{ $errors->login->first('password') }}

        </div>

    @endif



    @if (\Session::has('danger'))

        <div class="alert alert-danger" style="text-align: center;">

            {!! \Session::get('danger') !!}

        </div>

    @endif



    @if($errors->any())

        <div class="alert alert-danger" style="text-align: center;">

            {{$errors->first()}}

        </div>

    @endif

    <div class="container">


        <form method="POST" action="{{ route('register') }}">

            @csrf



            
                <input type="text" name="name" placeholder="Full name" class="w-100" value="{{ old('name') }}">

                <input type="text" name="email" placeholder="Email" class="w-100" value="{{ old('email') }}">


                <input type="password" name="password" placeholder="Password" class="w-50">

                <input type="password" name="password_confirmation" placeholder="Confirm password" class="w-50">


            <button class="btn">Signup</button>

            <p class="already">Already have an account?<a href="{{ route('login') }}"> Login</a></p>

        </form>

    </div>

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!-- bootstrap js -->

<script src="{!! asset('front/js/bootstrap.bundle.js') !!}"></script>



<!-- owl.carousel js -->

<script src="{!! asset('front/js/owl.carousel.min.js') !!}"></script>



<!-- lazyload js -->

<script src="{!! asset('front/js/lazyload.js') !!}"></script>



<!-- custom js -->

<script src="{!! asset('front/js/custom.js') !!}"></script>

</body>



</html>