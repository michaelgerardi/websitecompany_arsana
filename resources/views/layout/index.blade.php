<html>
<title>ARSANA</title>
<link href="{{asset('images/logo IMA.jpeg')}}" rel="icon">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
<div class="navbar navbar-expand-sm-auto" style = "background-color: #6C6B6B;">
  <div class="container-fluid">
    <div class="header-left" style="margin-bottom: -9px;">
      <!-- <div style="padding: 0 15px"> -->
        <!-- <ul class="navbar-nav me-auto mb-1 mb-lg-0"> -->
            <a class="nav-brand" href="#">
              <img style="width: 70px; height:70px; margin-left:30px; margin-top:-10px" src="{{asset('images/wa_logo.png')}}" alt="logo">
                <a class="ml-1 " style="color: #ffff"> : 08123849289</a>
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
<script>
$(document).ready(function(){ 
    $("#myCarousel").carousel({interval: 200});
        
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
       
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>
<br>
<br>
{{-- BERITA TERBARU HEADING --}}
<section id="news" class="news">
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Berita Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
</div>
<br>

<!-- CARD DECK BERITA -->
<div class="container-fluid">
  <div class="card-deck">
      <div class="card" style="width: 18rem; background-color:#6C6B6B; border-radius:10%;">
      <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap" style="border-radius: 10%;">
        <div class="card-body">
          <h5 class="card-title" style="color: #ffff;">Card title</h5>
          <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem; background-color:#6C6B6B; border-radius:10%;">
      <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap" style="border-radius: 9.8%;">
        <div class="card-body">
          <h5 class="card-title" style="color: #ffff;">Card title</h5>
          <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card" style="width: 18rem; background-color:#6C6B6B; border-radius:10%;">
      <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap" style="border-radius: 9.8%;">
        <div class="card-body">
          <h5 class="card-title" style="color: #ffff;">Card title</h5>
          <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

      <div class="card ml-2" style="width: 18rem; background-color:#6C6B6B; border-radius:10%;">
      <img class="card-img-top" src="images/gambar1.jpg" alt="Card image cap" style="border-radius: 9.8%;">
        <div class="card-body">
          <h5 class="card-title" style="color: #ffff;">Card title</h5>
          <p class="card-text"  style="color: #ffff;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
  </div>
</div>

<br>
<!-- ABOUT ARSANA -->
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black">ABOUT ARSANA</h1>
          <div class="decription; text-justify; margin-left=100px" style="color: black">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
      </div>
        <div class="col-lg-7 col-md-6 col-sm-12">
          <img style="width: 7cm; height:7cm; margin-left: 500px" src="images/20220704070302.png" alt="">
        </div>
    </div>
  </div>
</div>
</section>

<div class="container-fluid">
  <div class="jumbotron" style="background-color:#BB0A1E">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <img style="width: 7cm; height:7cm; margin-left:150px" src="images/20220704070302.png" alt="">
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12">
        <h4 style="color:#ffff">SERVICE</h1>
          <h1 style="color:#ffff">Learning Ecosystem</h1>
          <div class="decription; text-justify" style="color: #ffff">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <br>
            <a class="btn btn-white" href="" role="button">JOIN</a>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black">CONSULTING ECOSYSTEM</h1>
          <div class="decription; text-justify" style="color: black">
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
                <div class="decription" style="color: black">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <a class="btn btn-red" href="" role="button">Lanjut Konsultasi</a>
            </div>
        </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="card border-dark mb-4 ">
            <div class="card-body text-dark">
                <h5 class="card-title">Konsultasi 2</h5>
                <div class="decription; text-justify" style="color: black" >
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                </div>
                <a class="btn btn-red" href="" role="button">Lanjut Konsultasi</a>
            </div>
        </div>
    </div>
          <br>
          <div class="col-lg-7 col-md-6 col-sm-12">
        <div class="card border-dark mb-4 ">
            <div class="card-body text-dark">
                <h5 class="card-title">Konsultasi 3</h5>
                <div class="decription" style="color: black">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                </div>
                <a class="btn btn-red" href="" role="button">Lanjut Konsultasi</a>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>
<section id="contact" class="contact">
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="column" style="margin-left: 120px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.09396980032147!2d110.4409368881141!3d-7.736292442644153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bfc9a68e5cf%3A0x9797cbde4d86fc91!2sVilla%20Arsana!5e0!3m2!1sid!2sid!4v1657378890055!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="column" style="margin-left: 150px;">
          <h3>CONTACT US</h3>
          <br>
          <img style="width: 55px; height: 55px;" src="images/mail.png" alt="">
          <a> : arsanaecosystem@gmail.com</a>
          <br>
          <br>
          <img style="width: 55px; height: 55px;" src="images/logo_call.png" alt="">
          <a> : 08123849289</a>
          <br>
          <br>
          <img style="width: 55px; height: 55px;"  src="images/logo_ig.png" alt="">
          <a> : arsana.ecosystem</a>
      </div>
    </div>
  </div>
</div>
</section>
<br>

<!-- FOOTER -->
<div class="container-fluid">
  <!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color:#BB0A1E;">
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4" style="margin-top: 1%;">
          <!-- Content -->
          <img style="width: 90px; height:90px; border-radius:50%; margin-top:10px"  src="{{asset('images/logo IMA.jpeg')}}" alt="">
          <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"  style="margin-top: 2%;">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4">
            Products
          </h5>
          <p class="fs-4">
            <a href="#" class="text" style="color: #ffff;">Berita</a>
          </p>
          <p>
            <a href="#" class="text" style="color: #ffff;">Service</a>
          </p>
          <p>
            <a href="#" class="text" style="color: #ffff;">About Us</a>
          </p>
          <p>
            <a href="#" class="text" style="color: #ffff;">Contact Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="margin-top: 2%;">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4">
            Useful links
          </h5>
          <p>
            <a href="#" class="text" style="color: #ffff;">Kelas</a>
          </p>
          <p>
            <a href="#" class="text" style="color: #ffff;">Login</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="margin-top: 2%;">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4">
            Contact
          </h5>
          <p>
            <a href="#" class="text" style="color: #ffff;">Konsultasi</a>
          </p>
          <p>
            <a href="#" class="text" style="color: #ffff;">Jenis Konsultasi</a>
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

<script src="assets/js/jquery.js"></script> 
<script src="assets/js/popper.js"></script> 
<script src="assets/js/bootstrap.js"></script>
</body>
</html>