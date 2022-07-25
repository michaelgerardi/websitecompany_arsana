<!doctype html>
<html lang="en">
<link href="{{asset('images/logo IMA.jpeg')}}" rel="icon">
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
    <link rel="stylesheet" href="{{asset('loginasset/css/register.css')}}">

    <title>Register</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('loginasset/images/coba_1.jpg');height:1000px;"></div>
    <div class="contents order-2 order-md-1">
    <div class="container">
    <div class="col-md-7 col-xl-7">
    <img style="width: 70px; height:70px; border-radius:50%; margin-left:75px; margin-top:30px;"  src="{{asset('images/logo IMA.jpeg')}}" alt="">
    </div>
    </div>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 col-xl-7">
            <h3 class="text-center"><strong> Selamat Datang </strong></h3>
            <p class="mb-4 text-center"><strong>ARSANA Learning System</strong></p>
            <form action="{{ route('register') }}" method="post">
                @csrf
              <div class="form-group first">
                <label for="username" style="color: #ffff;">Nama Lengkap</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Tanggal Lahir</label>
                <input type="date" class="form-control" placeholder="Tanggal Lahir" id="password">
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Alamat</label>
                <input type="text" class="form-control" placeholder="Alamat" id="password">
                <hr width="100%" noshade size="25%" style="color:#BB0A1E">
              </div>
              <div class="last mb-3">
                <p>Isi Akun Anda</p>
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              </div>
              <div class="form-group last mb-3">
                <label for="password" style="color: #ffff;">Re-Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
              <button type="submit" class="btn btn-block btn-primary">DAFTAR</button>
            </form>
            <br>
            <br>
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