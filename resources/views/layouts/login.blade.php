<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('loginasset/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('loginasset/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('loginasset/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('loginasset/css/style.css')}}">

    <title>Login #2</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('loginasset/images/coba_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Colorlib</strong></h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            <form method="POST" action="{{ route('sublogin') }}">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(isset($email) AND isset($pass)) value="{{$email}}" @endif id="email" placeholder="your-email@gmail.com" id="username" required autocomplete="email" autofocus>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" @if(isset($email) AND isset($pass)) value="{{$pass}}" @endif required autocomplete="current-password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked" name="rememberme">
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <button type="submit" class="btn btn-block btn-primary">Log In</button>
            </form>
            
            <div class="flex items-center justify-end mt-4 align-middle ">
              <a href="{{ route('auth.google') }}">
                  <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('loginasset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('loginasset/js/popper.min.js')}}"></script>
    <script src="{{asset('loginasset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('loginasset/js/main.js')}}"></script>
  </body>
</html>