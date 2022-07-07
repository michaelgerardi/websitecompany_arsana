<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

{{-- TOPBAR STYLE --}}
<style>
  /* Modify the background color */
    .topbar-custom {
      background-color: #6C6B6B;
    }

  /* Modify brand and text color */
  
    /* .topbar-custom .topbar-brand,
    .topbar-custom .topbar-text {
              color: white;
        } */
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

</head>

<body>
{{-- <div class="row">
  <div class="topnav col-md-12" id="myTopnav">
    <a class="ml-2" style="color: #ff"> : 08123849289</a>
    <img style="width: 45px; height:45px; margin-left:10px" src="{{asset('images/logo call.png')}}" alt="logo">
    <img style="width: 75px; height:45px; margin-left:150px" src="{{asset('images/logo_gmail.png')}}" alt="">
  <a1 class="ml-3">: arsana@gmail.com</a1>
  </div>
</div> --}}

{{-- <div class="header topbar-custom"> --}}
<div class="navbar navbar-expand-lg top"></div>
  <div class="container-fluid">
    <div class="header-left">
      <div style="padding: 0 15px">
        <img style="width: 45px; height:45px; margin-left:10px" src="{{asset('images/logo call.png')}}" alt="logo">
        <a class="ml-2" style="color: #ffff"> : 08123849289</a>
        <img style="width: 75px; height:45px; margin-left:150px" src="{{asset('images/logo_gmail.png')}}" alt="">
        <a1 class="ml-3" style="color: #ffff">: arsana@gmail.com</a1>
      </div>
    </div>
  </div>
{{-- </div> --}}


<nav class="navbar navbar-expand-lg navbar-custom ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img style="width: 90px; height:90px; border-radius:50%" src="{{asset('images/logo IMA.jpeg')}}" alt="">
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
{{-- <div class="row">
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
</div> --}}

<!-- Slideshow container -->
{{-- <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="images/img1.png" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <img src="images/img2.png" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <img src="images/img3.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br> --}}

<!-- The dots/circles -->
{{-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src="{{ asset('js/scripts.js') }}"></script> --}}

{{-- IMAGE SLIDER  --}}
<div class="container">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/img1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/img2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/img3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
    <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </a>
  </div>
</div>

<br>
<br>
{{-- BERITA TERBARU HEADING --}}
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Berita Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
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

<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black">SERVICE</h1>
          <h1 style="color: black">Learning Ecosystem</h1>
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

<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
</body>
</html>