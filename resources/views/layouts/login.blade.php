
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('login/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('login/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('login/css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('login/css/style.css')}}">

    <title>Login</title>
    <link href="{{asset('images/logo IMA.jpeg')}}" rel="icon">
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('login/images/coba_1.jpg');"></div>
    <div class="contents order-2 order-md-1">


      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-7">        
            <h3 class="text-center">Selamat Datang</h3>
            <h3 class="text-center">ARSANA Learning System</h3>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="username" style="color: #ffff;">Email</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="username">
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Password</label>
                <input type="password" class="form-control" placeholder="Password" id="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
              <input type="submit" value="Sign In" class="btn btn-block btn-primary">
              <div class="container">
                <div class="text-center mt-1">
                  <a style="color: #ffff;">atau</a>
                </div>
              </div>
              <div class="d-flex mb-5 align-items-center">
              <button class="btn btn-block btn-google">
                  <img src="images/logo_google.png" width="20" /> Login with Google
              </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{asset('login/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('login/js/popper.min.js')}}"></script>
    <script src="{{asset('login/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('login/js/main.js')}}"></script>
  </body>
</html>