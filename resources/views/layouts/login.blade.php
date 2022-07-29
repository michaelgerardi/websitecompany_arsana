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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Login</title>
  </head>
  <body>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>
  

  <div class="d-lg-flex half">
    
    <div class="bg order-1 order-md-2" style="background-image: url('loginasset/images/coba_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
          <h3 class="text-center"><strong> Selamat Datang </strong></h3>
            <p class="mb-4 text-center"><strong>ARSANA Learning System</strong></p>
            <form action="{{route('sublogin')}}" method="post">
            {{csrf_field()}}
              <div class="form-group first">
                <label for="username" style="color: #ffff;">Username</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" @if(isset($email) AND isset($pass)) value="{{$email}}" @endif id="email" placeholder="your-email@gmail.com" id="username" required autocomplete="email" autofocus>
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password" @if(isset($email) AND isset($pass)) value="{{$pass}}" @endif required autocomplete="current-password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" name="rememberme" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="/password/reset" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <button type="submit"class="btn btn-danger btn-block">Log In</button>
              <hr width="100%" noshade size="25%" style="color:#BB0A1E">
              <!-- <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a> -->
               <!-- tambahkan script di bawah ini untuk membuat tombol signin google -->
               <a class="btn btn-danger" href="{{ route('auth.google')}}">google</a>

            </form>
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