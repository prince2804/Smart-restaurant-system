
<!DOCTYPE html>

<html>



<head>

    <!-- meta tag -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="csrf-token" id="csrf-token" content="<?php echo e(csrf_token()); ?>">



    <!-- favicon-icon  -->



    <!-- font-awsome css  -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/css/font-awsome.css'); ?>">



    <!-- fonts css -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/fonts/fonts.css'); ?>">



    <!-- bootstrap css -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/css/bootstrap.min.css'); ?>">



    <!-- fancybox css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />



    <!-- owl.carousel css -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/css/owl.carousel.min.css'); ?>">



    <link href="<?php echo asset('assets/plugins/sweetalert/css/sweetalert.css'); ?>" rel="stylesheet">

    <!-- style css  -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/css/style.css'); ?>">



    <!-- responsive css  -->

    <link rel="stylesheet" type="text/css" href="<?php echo asset('front/css/responsive.css'); ?>">



</head>



<body>



<div id="success-msg" class="alert alert-dismissible mt-3" style="display: none;">

    <span id="msg"></span>

</div>



<div id="error-msg" class="alert alert-dismissible mt-3" style="display: none;">

    <span id="ermsg"></span>

</div>





<section class="signup-sec">

    <img src='<?php echo asset("assets/images/bg.jpg"); ?>' class="bg-img" alt="">

    

    <?php if($errors->login->first('email') && $errors->login->first('mobile')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->login->first('email')); ?> <?php echo e($errors->login->first('mobile')); ?>


        </div>

    <?php elseif($errors->login->first('email')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->login->first('email')); ?>


        </div>

    <?php elseif($errors->login->first('mobile')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->login->first('mobile')); ?>


        </div>

    <?php endif; ?>

    <?php if($errors->login->first('name')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->login->first('name')); ?>


        </div>

    <?php endif; ?>

    <?php if($errors->login->first('password')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->login->first('password')); ?>


        </div>

    <?php endif; ?>



    <?php if(\Session::has('danger')): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo \Session::get('danger'); ?>


        </div>

    <?php endif; ?>



    <?php if($errors->any()): ?>

        <div class="alert alert-danger" style="text-align: center;">

            <?php echo e($errors->first()); ?>


        </div>

    <?php endif; ?>

    <div class="container">


        <form method="POST" action="<?php echo e(route('register')); ?>">

            <?php echo csrf_field(); ?>



            
                <input type="text" name="name" placeholder="Full name" class="w-100" value="<?php echo e(old('name')); ?>">

                <input type="text" name="email" placeholder="Email" class="w-100" value="<?php echo e(old('email')); ?>">


                <input type="password" name="password" placeholder="Password" class="w-50">

                <input type="password" name="password_confirmation" placeholder="Confirm password" class="w-50">


            <button class="btn">Signup</button>

            <p class="already">Already have an account?<a href="<?php echo e(route('login')); ?>"> Login</a></p>

        </form>

    </div>

</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!-- bootstrap js -->

<script src="<?php echo asset('front/js/bootstrap.bundle.js'); ?>"></script>



<!-- owl.carousel js -->

<script src="<?php echo asset('front/js/owl.carousel.min.js'); ?>"></script>



<!-- lazyload js -->

<script src="<?php echo asset('front/js/lazyload.js'); ?>"></script>



<!-- custom js -->

<script src="<?php echo asset('front/js/custom.js'); ?>"></script>

</body>



</html><?php /**PATH C:\xampp\htdocs\Restaurant-master\resources\views/auth/register.blade.php ENDPATH**/ ?>