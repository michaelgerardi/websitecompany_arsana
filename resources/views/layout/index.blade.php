<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

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
</head>

<body>
<!-- <div class="row">
  <div class="topnav col-md-12" id="myTopnav">
    <a class="ml-2" style="color: #ff"> : 08123849289</a>
    <img style="width: 45px; height:45px; margin-left:10px" src="{{asset('images/logo call.png')}}" alt="logo">
    <img style="width: 75px; height:45px; margin-left:150px" src="{{asset('images/logo_gmail.png')}}" alt="">
  <a1 class="ml-3">: arsana@gmail.com</a1>
  </div>
</div> -->

<!-- <div class="header topbar-custom"> -->
<div class="navbar navbar-expand-sm-auto" style = "background-color: #6C6B6B">
  <div class="container-fluid">
    <div class="header-left">
      <!-- <div style="padding: 0 15px"> -->
        <!-- <ul class="navbar-nav me-auto mb-1 mb-lg-0"> -->
            <a class="nav-brand" href="#">
              <img style="width: 70px; height:70px; margin-left:30px" src="{{asset('images/wa_logo.png')}}" alt="logo">
                <a class="ml-1" style="color: #ffff"> : 08123849289</a>
            </a>
          <a class="nav-brand" href="#">
              <img style="width: 75px; height:45px; margin-left:50px" src="{{asset('images/logo_gmail.png')}}" alt="">
              <a class="ml-1" style="color: #ffff">: arsana@gmail.com</a>
          </a>
        <!-- </ul> -->
      <!-- </div> -->
    </div>
  </div>
</div>
<!-- </div> -->


<nav class="navbar navbar-expand-lg navbar-custom ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img style="width: 90px; height:90px; border-radius:50%; margin-left:88px"  src="{{asset('images/logo IMA.jpeg')}}" alt="">
    </a>
      <ul class="navbar-nav mr-5">
        <li class="nav-item">
          <a class="navbar-brand" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#news">News</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#about">About</a>
        </li>
      </ul>
  </div>
</nav>
<!-- <div class="row">
    <div class="topbar col-md-12">
    <img style="width: 90px; height:90px; border-radius:50%" src="{{asset('images/logo IMA.jpeg')}}" alt="">
      <ul class="navbar-nav mr-5">
        <li class="nav-item">
          <a class="active" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a1 href="#news">News</a1>
        </li>
        <li class="nav-item">
          <a2 href="#contact">Contact</a2>
        </li>
        <li class="nav-item">
          <a3 href="#about">About</a3>
        </li>
      </ul>
    </div>
</div> -->


{{-- IMAGE SLIDER  --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="images/img1.png" class="d-block w-100" alt="First slide">
    </div>
    <div class="carousel-item">
    <img src="images/img2.png" class="d-block w-100"alt="Second slide">
    </div>
    <div class="carousel-item">
    <img src="images/img3.png" class="d-block w-100"alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
{{-- BERITA TERBARU HEADING --}}
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Berita Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">

<br>
<br>
<div class="row">
  <div class="col-3">
  <div class="card ml-2" style="width: 18rem; background-color:#6C6B6B">
  <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: #ffff;">Card title</h5>
    <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
  </div>
  <div class="col-3">
  <div class="card ml-2" style="width: 18rem; background-color:#6C6B6B">
  <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: #ffff;">Card title</h5>
    <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
  </div>
  <div class="col-3">
  <div class="card ml-2" style="width: 18rem; background-color:#6C6B6B">
  <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: #ffff;">Card title</h5>
    <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
  </div>
  <div class="col-3">
  <div class="card ml-2" style="width: 18rem; background-color:#6C6B6B">
  <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title" style="color: #ffff;">Card title</h5>
    <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

  </div>
</div>
  </div>
</div>


</div>
<br>
<br>

<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black">ARSANA</h1>
          <div class="decription" style="color: black">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
      </div>
        <div class="col-lg-7 col-md-6 col-sm-12">
          <img style="width: 7cm; height:7cm; margin-left: 500px" src="images/20220704070302.png" alt="">
        </div>
    </div>
</div>
</div>

<div class="container-fluid">
  <div class="jumbotron" style="background-color:#BB0A1E">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <img style="width: 7cm; height:7cm; margin-left:150px" src="images/20220704070302.png" alt="">
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h4 style="color:#ffff">SERVICE</h1>
          <h1 style="color:#ffff">Learning Ecosystem</h1>
          <div class="decription" style="color: #ffff">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <br>
            <a class="btn btn-white" href="" role="button">JOIN</a>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black">CONSULTING ECOSYSTEM</h1>
          <div class="decription" style="color: black">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
      </div>
        <div class="col-lg-7 col-md-6 col-sm-12">
          <img style="width: 7cm; height:7cm; margin-left: 500px" src="images/20220704070302.png" alt="">
        </div>
    </div>
</div>
</div>
<br>
<br>
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#BB0A1E">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <img style="width: 7cm; height:7cm; margin-left:150px" src="images/20220704070302.png" alt="">
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h4 style="color:#ffff">JENIS KONSULTASI</h1>
          <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="card border-dark mb-4 ">
            <div class="card-body text-dark">
                <h5 class="card-title">Konsultasi 1</h5>
                <a class="btn btn-red" href="" role="button">JOIN</a>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="card border-dark mb-4 ">
            <div class="card-body text-dark">
                <h5 class="card-title">Konsultasi 2</h5>
                <a class="btn btn-red" href="" role="button">JOIN</a>
            </div>
        </div>
    </div>
          <br>
          <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="card border-dark mb-4 ">
            <div class="card-body text-dark">
                <h5 class="card-title">Konsultasi 3</h5>
                <a class="btn btn-red" href="" role="button">JOIN</a>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>
<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
</body>
</html>