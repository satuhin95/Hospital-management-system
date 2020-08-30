<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1" name="viewport" />
   <meta name="description" content="Responsive Admin Template" />
   <meta name="author" content="SmartUniversity" />
   <title>Login</title>
   <!-- google font -->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet"
      type="text/css" />
   <!-- icons -->
   <link href="{{asset('public/admin/assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
   <link rel="stylesheet"
      href="{{asset('public/admin/assets/bundles/iconic/css/material-design-iconic-font.min.css')}}">
   <!-- bootstrap -->
   <link href="{{asset('public/admin/assets/bundles/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
      type="text/css" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

   <!-- style -->
   <link rel="stylesheet" href="{{asset('public/admin/assets/css/extra_pages.css')}}">
   <!-- favicon -->
   <link rel="shortcut icon" href="{{asset('public/admin/assets/img/favicon.ico')}}" />
</head>

<body>
   <div class="limiter">
      <div class="container-login100 page-background">
         <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{URL::to('login/check')}}" method="post">
               @csrf
               <span class="login100-form-logo">
                  <img alt="" src="{{asset('public/admin/assets/img/hospital.png')}}">
               </span>
               <span class="login100-form-title p-b-34 p-t-27">
                  Log in
               </span>
               <div class="wrap-input100 validate-input" data-validate="Enter Email">
                  <input class="input100" type="email" name="email" placeholder="Email">
                  {{-- <span class="focus-input100" data-placeholder="&#xf207;"></span> --}}
               </div>
               <div class="wrap-input100 validate-input" data-validate="Enter password">
                  <input class="input100" type="password" name="password" placeholder="Password">
                  {{-- <span class="focus-input100" data-placeholder="&#xf191;"></span> --}}
               </div>
               <div class="container-login100-form-btn">
                  <button class="login100-form-btn" type="submit" name="submit">
                     Login
                  </button>
               </div>
               <div class="text-center p-t-30">
                  <a class="txt1" href="forgot_password.html">
                     Forgot Password?
                  </a>
               </div>
            </form>
         </div>
      </div>
   </div>
   <script src="{{asset('public/admin/assets/bundles/jquery/jquery.min.js')}}"></script>
   <!-- bootstrap -->
   <script src="{{asset('public/admin/assets/bundles/bootstrap/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
   </script>
   <script src="{{asset('public/admin/assets/data/login-data.js')}}"></script>
   <script>
      @if(Session::has('messege'))
      var type="{{Session::get('alert-type','info')}}"
      switch(type){
        case 'info':
        toastr.info("{{ Session::get('messege') }}");
        break;
        case 'success':
        toastr.success("{{ Session::get('messege') }}");
        break;
        case 'warning':
        toastr.warning("{{ Session::get('messege') }}");
        break;
        case 'error':
        toastr.error("{{ Session::get('messege') }}");
        break;
    }
    @endif
   </script>
</body>

</html>