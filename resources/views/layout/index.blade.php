<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/navbar.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


</head>
<body>
<div class="row">
<div class="topnav col-md-12" id="myTopnav">
  <a class="ml-2" style="color: #ffff"> : 08123849289</a>
 <img style="width: 45px; height:45px; margin-left:10px" src="{{asset('images/logo call.png')}}" alt="logo">
<img style="width: 75px; height:45px; margin-left:150px" src="{{asset('images/logo_gmail.png')}}" alt="">
<a1 class="ml-3">: arsana@gmail.com</a1>
</div>
</div>
<div class="row">
<div class="topbar col-md-12">
<img style="width: 90px; height:90px; border-radius:50%" src="{{asset('images/logo IMA.jpeg')}}" alt="">
  <div class="navtop">
    <div class="container">
    <a class="active" href="#home">Home</a>
    <a1 href="#news">News</a1>
    <a2 href="#contact">Contact</a2>
    <a3 href="#about">About</a3>
</div>
  </div>

</div>
</div>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="gambar1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>

  <div class="mySlides fade">
    <img src="img2.jpg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>

  <div class="mySlides fade">
    <img src="img3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>