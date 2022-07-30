@extends('layouts.navcompro')

@section('content')
{{-- IMAGE SLIDER  --}}
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -25px;">
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
<style>
  .cards-wrapper {
  display: flex;
  justify-content: center;
}
.card img {
  max-width: 100%;
  max-height: 100%;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
  border-radius: 0;
  
}

@media (min-width: 768px) {
  .card img {
    height: 11em;
  }
}
</style>
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
<style>
  body{
        margin: 0;
        padding: 0;
        font-family: 'roboto' , sans-serif;
        background-color: #F2F2F2;
    }
    h1{
        text-align: center;
        color: #333333;
    }
    .cardcontainer{
        width: 350px;
        height: 500px;
        background-color: white;
        margin-left: auto;
        margin-right: auto;
        transition: 0.3s;
    }
    .cardcontainer:hover{
        box-shadow: 0 0 45px gray;
    }
    .photo{
        height: 300px;
        width: 100%;
    }
    .photo img{
        height: 100%;
        width: 100%;
    }
    .txt1{
        margin: auto;
        text-align: center;
        font-size: 17px;
    }
    .content{
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        top: -33px;
    }
    .photos{
        width: 90px;
        height: 30px;
        background-color: #E74C3C;
        color: white;
        position: relative;
        top: -30px;
        padding-left: 10px;
        font-size: 20px;
    }
    .txt4{
        font-size:27px;
        position: relative;
        top: 33px;
    }
    .txt5{
        position: relative;
        top: 18px;
        color: #E74C3C;
        font-size: 23px;
    }
    .txt2{
        position: relative;
        top: 10px;
    }
    .cardcontainer:hover > .photo{
        height: 200px;
        animation: move1 0.5s ease both;
    }
    @keyframes move1{
        0%{height: 300px}
        100%{height: 200px}
    }
    .cardcontainer:hover > .content{
        height: 200px;
    }
    .footer{
        width: 80%;
        height: 100px;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        position: relative;
        top: -15px;
    }
    .btn{
        position: relative;
        top: 20px;
    }
    #heart{
        cursor: pointer;
    }
    .like{
        float: right;
        font-size: 22px;
        position: relative;
        top: 20px;
        color: #333333;
    }
    .fa-gratipay{
        margin-right: 10px;
        transition: 0.5s;
    }
    .fa-gratipay:hover{
        color: #E74C3C;
    }
    .txt3{
        color: gray;
        position: relative;
        top: 18px;
        font-size: 14px;
    }
    .comments{
        float: right;
        cursor: pointer;
    }
    .fa-clock, .fa-comments{
        margin-right: 7px;
    }
</style>
<style>
  /* TITRE */
h1 {
  margin-top: 0;
  font-size: 3rem;
  display: inline-block;
}
h1 div {
  position: relative;
  float: left;
}
h1 div:first-child {
  color: #3498db;
  margin-right: 1rem;
}
/* PROFIL */
.blog .carousel-indicators {
	left: 0;
	top: auto;
    bottom: -40px;

}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 50%;
    width: 8px;
    height: 8px;
    margin-bottom:10px;
    
}

.blog .carousel-indicators .active {
background: #707070;
margin-bottom:10px;
}

.our-team-section {
  position: relative;
  padding-top: 40px;
  padding-bottom: 40px;
}
.our-team-section:before {
  position: absolute;
  top: -0;
  left: 0;
  content: " ";
  background: url(img/service-section-bottom.png);
  background-size: 100% 100px;
  width: 100%;
  height: 100px;
  float: left;
  z-index: 99;
}
.our-team {
  padding: 0 0 40px;
  background: #f9f9f9;
  text-align: center;
  overflow: hidden;
  position: relative;
  border-bottom: 5px solid #BB0A1E;
}
.our-team:hover {
  border-bottom: 5px solid #2f2f2f;
}

.our-team .pic {
  display: inline-block;
  width: 130px;
  height: 130px;
  margin-bottom: 50px;
  z-index: 1;
  position: relative;
}
.our-team .pic:before {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #BB0A1E;
  position: absolute;
  bottom: 135%;
  right: 0;
  left: 0;
  opacity: 1;
  transform: scale(3);
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before {
  height: 100%;
  background: #5c060f;
}
.our-team .pic:after {
  content: "";
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: #ffffff00;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  transition: all 0.3s linear 0s;
}
.our-team:hover .pic:after {
  background: #ed2b41;
}
.our-team .pic img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  transform: scale(1);
  transition: all 0.9s ease 0s;
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
  position: relative;
  z-index: 2;
}
.our-team:hover .pic img {
  box-shadow: 0 0 0 14px #f7f5ec;
  transform: scale(0.7);
}
.our-team .team-content {
  margin-bottom: 30px;
}
.our-team .title {
  font-size: 22px;
  font-weight: 700;
  color: #4e5052;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin-bottom: 5px;
}
.our-team .post {
  display: block;
  font-size: 15px;
  color: #4e5052;
  text-transform: capitalize;
}
.our-team .social {
  width: 100%;
  padding-top: 10px;
  margin: 0;
  background: #2f2f2f;
  position: absolute;
  bottom: -100px;
  left: 0;
  transition: all 0.5s ease 0s;
}
.our-team:hover .social {
  bottom: 0;
}
.our-team .social li {
  display: inline-block;
}
.our-team .social li a {
  display: block;
  padding-top: 6px;
  font-size: 15px;
  color: #fff;
  transition: all 0.3s ease 0s;
}
.our-team .social li a:hover {
  color: #145889;
  background: #f7f5ec;
}
@media only screen and (max-width: 990px) {
  .our-team {
    margin-bottom: 10px;
  }
}
</style>
<br>
<br>

{{-- BERITA TERBARU HEADING --}}
<section id="news" class="news">
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Berita Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
</div>
</section>
<br>

<!-- CARD DECK BERITA -->
<div class="row col-md-12">
@foreach($content as $konten)
<div class="container-fluid col-md-4">
  <div class="card-deck">
  <div class="container">
        
        <div class="cardcontainer">
            <div class="photo">
                <img src="{{asset('images/'.$konten->gambar)}}">
                <div class="photos">Photos</div>
            </div>
            <div class="content">
                <p class="txt4">{{$konten->nama_blog}}</p>
                <p class="txt5">A city that never sleeps</p>
                <p class="txt2">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling </p>
            </div>
            <div class="footer">
                <p><a class="waves-effect waves-light btn" href="#">Read More</a></a></p>
                <!-- <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p> -->
            </div>
        </div>
    </div>
  </div>
</div>
@endforeach
</div>
<br>
<!-- ABOUT ARSANA -->
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black"><b>ABOUT ARSANA</b></h4>
          <div class="decription; margin-left=100px" style="color: black; text-align:justify;">
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

<!-- SERVICE -->
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#BB0A1E">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12 col-xl-6">
        <img style="width: 7cm; height:7cm; margin-left:150px" src="images/20220704070302.png" alt="">
      </div>
      <div class="col-lg-7 col-md-6 col-sm-12 col-xl-6">
        <h4 style="color:#ffff"><b>SERVICE</b></h1>
          <h1 style="color:#ffff">Learning Ecosystem</h1>
          <div class="decription; text-justify" style="color: #ffff">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </div>
          <br>
            <!-- LINK HALAMAN SERVICE -->
            <a class="btn btn-white" href="/service" role="button">See More</a>
      </div>
    </div>
  </div>
</div>

<br>
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black"><b>CONSULTING ECOSYSTEM</b></h1>
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

<!-- ======= layanan Section ======= -->
<section id="news" class="news">
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Layanan Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
</div>
</section>
<br>

<div class="row col-md-12">
@foreach($layanan as $layanan)
<div class="container-fluid col-md-4">
  <div class="card-deck">
  <div class="container">
        
        <div class="cardcontainer">
            <div class="photo">
                <img src="{{asset('layanan/'.$layanan->gambar)}}">
                <div class="photos">Photos</div>
            </div>
            <div class="content">
                <p class="txt4">{{$layanan->judul_layanan}}</p>
                <p class="txt5">{{$layanan->jenis_layanan}}</p>
                <p class="txt2">{{$layanan->deskripsi}}</p>
            </div>
            <div class="footer">
                <p><a class="waves-effect waves-light btn" href="#">Read More</a></a></p>
                <!-- <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p> -->
            </div>
        </div>
    </div>
  </div>
</div>
@endforeach
</div>
<!-- ======= layanan Section ======= -->

<br>
<!-- ======= Portofolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#BB0A1E">
      
      <div id="cards_landscape_wrap-2">
        <div class="container mt-1">
          <h1 style="color:#ffff;" class="text-center"><b>PORTFOLIO</b></h1>
          <div class="row">

          @foreach($portofolio as $portofolio)
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="">
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                    <img src="{{asset('portofolio/'.$portofolio->gambar)}}" alt="" />
                </div>
              </div>
            </div>
            </a>
            </div>
            @endforeach

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_ugm.jpg" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_ukdw.jpg" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_ristek.png" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/pertamina.png" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_dinped.png" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_crossdev.jpeg" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

            <!-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <a href="">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="image-box">
                    <img src="images/logo_kominfo.jpg" alt="" />
                  </div>
                </div>
              </div>
              </a>
            </div> -->

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LAYANAN KONSUL -->
<!-- <div class="container-fluid">
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
</div> -->



<!-- CONTACT US -->
<section id="contact" class="contact">
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#ffff">
      <div class="row">
        <div class="column" style="margin-left: 120px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.09396980032147!2d110.4409368881141!3d-7.736292442644153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bfc9a68e5cf%3A0x9797cbde4d86fc91!2sVilla%20Arsana!5e0!3m2!1sid!2sid!4v1657378890055!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="column" style="margin-left: 150px;">
            <h3><b>CONTACT US</b></h3>
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

<!-- ARSANA PROFILE SECTION -->
<section>
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#2b2b2b; height:min-content; margin-bottom:-70px;">
      <div class="row">
      <div class="container">
    <div class="row blog">
        <h1 class="center mx-auto text-center py-4" style="color:#ffff">MEET OUR KEY PERSON</h1>
       
	   <div class="col-md-12">
            <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                <ol class="invisible carousel-indicators">
                    <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>

                <!-- Carousel items -->
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Dana Robins</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">John Doe</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Sophia Lee</h3>
                                        <span class="post">Customer Support</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->
                    


                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->

        </div>
    </div>
</div>
    </div>
  </div>
</section>
<br>
@endsection