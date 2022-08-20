<!DOCTYPE html>
<title>ARSANA</title>
<html lang="en">
<link href="{{asset('images/logo IMA.jpeg')}}" rel="icon">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

    

<style>
  body{
    font-family: 'Lato', sans-serif;
  }
</style>

{{-- NAVBAR STYLE --}}
<style>
  /* Modify the background color */
    .navbar-custom {
      background-color: #BB0A1E;
    }

  /* Modify brand and text color */
  
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
              color: white;
        }
</style>



{{-- HR STYLE --}}
<style>
  hr {
    height: 5px;
    border: 0;
    background: #BB0A1E;
  }
</style>

{{-- BUTTON WHITE --}}
<style>
  .btn-white{
    background-color: #ffff;
    color: #BB0A1E;
    border-color: #ffff;
  }

  .btn-white:hover, .btn-white:focus, .btn-white:active, .btn-white.active, .open .dropdown-toggle.btn-white {
 background-color: #63020d;
 color:#ffff;
 border-color: #63020d;
 }
</style>

{{-- BUTTON RED --}}
<style>
  .btn-red{
    background-color: #BB0A1E;
    color: #ffff;
    border-color: #ffff;
  }
  .btn-red:hover{
 background-color: #ffff;
 color:#63020d;
 border-color: #ffff;
 }
</style>

<!-- CARD -->
<style>
 /* ----  Main Style  ---- */
#cards_landscape_wrap-2{
  text-align: center;
  background: #BB0A1E;
}
#cards_landscape_wrap-2 .container{
  padding-top: 80px; 
  padding-bottom: 100px;
}
#cards_landscape_wrap-2 a{
  text-decoration: none;
  outline: none;
}
#cards_landscape_wrap-2 .card-flyer {
  border-radius: 5px;

}
#cards_landscape_wrap-2 .card-flyer .image-box{
  background: #ffffff;
  overflow: hidden;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
  border-radius: 5px;
}
#cards_landscape_wrap-2 .card-flyer .image-box img{
  -webkit-transition:all .9s ease; 
  -moz-transition:all .9s ease; 
  -o-transition:all .9s ease;
  -ms-transition:all .9s ease; 
  width: 100%;
  height: 200px;
}
#cards_landscape_wrap-2 .card-flyer:hover .image-box img{
  opacity: 0.7;
  -webkit-transform:scale(1.15);
  -moz-transform:scale(1.15);
  -ms-transform:scale(1.15);
  -o-transform:scale(1.15);
  transform:scale(1.15);
}
#cards_landscape_wrap-2 .card-flyer .text-box{
  text-align: center;
}
#cards_landscape_wrap-2 .card-flyer .text-box .text-container{
  padding: 30px 18px;
}
#cards_landscape_wrap-2 .card-flyer{
  background: #FFFFFF;
  margin-top: 50px;
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
}
#cards_landscape_wrap-2 .card-flyer:hover{
  background: #fff;
  box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
  margin-top: 50px;
}
#cards_landscape_wrap-2 .card-flyer .text-box p{
  margin-top: 10px;
  margin-bottom: 0px;
  padding-bottom: 0px; 
  font-size: 14px;
  letter-spacing: 1px;
  color: #000000;
}
#cards_landscape_wrap-2 .card-flyer .text-box h6{
  margin-top: 0px;
  margin-bottom: 4px; 
  font-size: 18px;
  font-weight: bold;
  text-transform: uppercase;
  font-family: 'Roboto Black', sans-serif;
  letter-spacing: 1px;
  color: #00acc1;
}
</style>

<!-- WA FLOATING -->
<style>
  .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
</head>
<body>
<!-- WA FLOATING -->
<a href="https://chat.whatsapp.com/LV7qshiHrlT4HnqtdAC5gh" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <div class="app">
        <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-custom">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img class="img-fluid ml-4" style="width: 90px; height:90px; border-radius:50%;" src="{{asset('images/logo_IMA.jpeg')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <!-- <span class="navbar-toggler-icon"></span> -->
              <span class="fa fa-bars" style="color:#ffff"></span>
            </button>
            
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a class="navbar-brand " href="/layout"><b>Home</b></a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand " href="/layout#news"><b>News</b></a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand " href="/layout#portfolio"><b>Portofolio</b></a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand " href="/layout#about"><b>About</b></a>
                </li>
                <li class="nav-item">
                <a class="navbar-brand " href="/layout#footer"><b>Contact</b></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
              <!-- <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars" style="color:#ffff;"></span>
                </button>
              </div> -->
            
              
            

        <main class="py-4">
                @yield('content')
        </main>
        <!-- FOOTER -->
    <div class="container-fluid">
      <!-- Footer -->
      <footer class="text-center text-lg-start text-white" style="background-color:#BB0A1E;">
        <!-- Section: Links  -->
        <section id="footer" name="footer">
          <div class="container-fluid text-md-start mt-5">
            <!-- Grid row -->
            <div class="container-fluid">
            <div class="row row-cols-lg-5">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-3 col-xl-3 mt-3 mb-4 mr-lg-auto">
                <!-- Content -->
                <img class="mb-2" style="width: 90px; height:90px; border-radius:50%; margin-left:-10px"  src="{{asset('images/logo_IMA.jpeg')}}" alt="">
                <p class="text-center">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-1 col-lg-2 col-xl-1 mr-md-4 mt-3 mb-4 mr-lg-0 ml-lg-auto">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4 text-justify">
                  <b>Home</b>
                </h5>
                <p class="text-justify">
                  <a href="#news" class="text" style="color: #ffff;">Berita</a>
                </p>
                <p class="text-justify">
                  <a href="#services" class="text" style="color: #ffff;">Service</a>
                </p>
                <p class="text-justify">
                  <a href="#about" class="text" style="color: #ffff;">About Us</a>
                </p>
                <p class="text-justify">
                  <a href="#comment" class="text" style="color: #ffff;">Comment</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-1 col-lg-2 col-xl-1 mr-md-4 mt-3 mb-4 mr-lg-0">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4 text-justify">
                  <b>Link</b>
                </h5>
                <p class="text-justify">
                  <a href="#" class="text" style="color: #ffff;">Kelas</a>
                </p>
                <p class="text-justify">
                  <a href="/layoutlogin" class="text" style="color: #ffff;">Login</a>
                </p>
                <!-- <a class="text" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><b>Logout</b></a> -->
                          <form id="logout-form" action="{{ route('logoutfnl') }}" method="POST" class="d-none">
                            @csrf
                          </form>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-1 mt-3 mb-4 mr-md-2 mr-lg-0 mr-xl-5">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4 text-justify">
                  <b>Layanan</b>
                </h5>
                <p class="text-justify">
                  <a href="#" class="text" style="color: #ffff;">Konsultasi</a>
                </p>
                <p class="text-justify">
                  <a href="#" class="text" style="color: #ffff;">Jenis Konsultasi</a>
                </p>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-4 col-lg-4 col-xl-3 col-xxl-2 mt-3 px-0 mb-4">
                <!-- Links -->
                <h5 class="text-uppercase fw-bold mb-4 text-justify">
                  <b>Contact Us</b>
                </h5>
                <p class="text-justify">
                  <i class="fa fa-envelope"></i><a class="text" style="color:#ffff;"> : arsana.ecosystem@gmail.com</a>
                </p>
                <p class="text-justify">
                  <i class="fa fa-phone"></i><a class="text" style="color:#ffff;"> : +6287738934560</a>
                </p>
                <p class="text-justify">
                  <i class="fa fa-globe"></i><a class="text" style="color:#ffff;"> : arsanaecosystem.com</a>
                </p>
                <p class="text-justify">
                  <i class="fa fa-instagram"></i><a class="text" style="color:#ffff;"> : @arsana.ecosystem</a>
                </p>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->
          </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color:#6C6B6B;">
          © 2022 Copyright:
          <a class="text-reset fw-bold" style="color: #ffff;">Crossdev</a>
        </div>
        <!-- Copyright -->
      </footer>
    <!-- Footer -->
      </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>