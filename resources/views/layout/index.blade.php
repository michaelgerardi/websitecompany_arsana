@extends('layouts.navcompro')

@section('content')
{{-- IMAGE SLIDER  --}}
<link rel="canonical" href="https://arsanaecosystem.com/">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top: -25px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  
  <div class="carousel-inner">
    @foreach($slider as $item)
    <div class="carousel-item @if($loop->iteration==1)active @endif">
    <img src="slider/{{$item->gambar}}" class="d-block w-100" alt="First slide">
    </div>
    @endforeach
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
html {
  scroll-behavior: smooth;
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
        width: 100%;
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
        overflow: hidden; 
        text-overflow: ellipsis;
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
@media only screen and (max-width: 1200px) and(max-width:768px) and (max-width:576px) {
  .our-team {
    margin-bottom: 10px;
  }
}
.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='red' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}
</style>
<br>
<br>

{{-- BERITA TERBARU HEADING --}}
<section id="news" class="news">
<div class="container col-xl-12 col-md-12 col-xs-12">
  <h1 class="ml-2" style="color:#BB0A1E">Berita Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
</div>
</section>
<br>

<!-- CARD DECK BERITA -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- ------------------ -->
    @for($i=1;$i<=$Cpg;$i++)
    <div class="carousel-item @if($i==1) active @endif">
      <div class="container justify-content-center col-md-10">
        <div class="row col-md-12">
          @for($ii=$i*3-2;$ii<=$i*3;$ii++)
            <div class="container col-md-4 mx-0">
              <div class="container col-md-12">
                <div class="cardcontainer">
                  <div class="photo">
                      <img src="{{asset('images/'.$content[$ii-1]->gambar)}}">
                      <div class="photos">{{\Illuminate\Support\Str::limit($content[$ii-1]->nama_blog, 5, $end='...')}}</div>
                  </div>
                  <div class="content">
                    <div class="container col-md-12">
                      <p class="txt4 col-md-12" style="margin-top:20px"><b>{{$content[$ii-1]->nama_blog}}</b></p>
                      <p class="txt2 col-md-12" style="margin-top:25px">{{\Illuminate\Support\Str::limit($content[$ii-1]->keterangan, 150, $end='...')}} </p>
                    </div>
                  </div>
                  <div class="footer">
                      <p><a class="waves-effect waves-light btn" href="/viewblog/{{$content[$ii-1]->id}}">Read More</a></a></p>
                      <!-- <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p> -->
                  </div>
                </div>
              </div>
            </div>
            @if($ii==$Citem)
              @break
            @endif
          @endfor
        </div>
      </div>
    </div>
    @endfor
<!-- ------------ -->
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" style="color:black" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<!-- ABOUT ARSANA -->
<section id="about" class="about">
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row align-items-center">
      <div class="col-xl-6 col-md-12 col-xs-12">
        <h3 class="text-start" style="color:black"><b>ABOUT ARSANA</b></h3>
          <p class="text-start" style="color: black; text-align:justify;">
          Sebuah platform peningkatan kompetensi untuk para profesional dan akademisi. Menyajikan pelatihan secara blended learning, in house training, 
          dan konsultasi yang diisi oleh para ahli & praktisi.
           </p>
      </div>
      <div class="col-xs-12 col-md-12 col-xl-5 offset-xl-1 text-center">
        <img class="img-fluid" src="images/gambar2_1.jpg" alt="">
      </div>
    </div>
  </div>
</div>
</section>

<!-- SERVICE -->
<section id="services" class="services">
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#BB0A1E">
    <div class="row align-items-center">
    <div class="col-xl-6 col-md-12 col-xs-12 mb-3 text-center">
      <img class="img-fluid" src="images/learning_1.jpg" alt="">
      </div>
      <div class="col-xs-12 col-md-12 col-xl-5">
        <h4 class="text-start" style="color:#ffff"><b>SERVICE</b></h1>
          <h1 class="text-start" style="color:#ffff; text-align:justify">Learning Ecosystem</h1>
          <div class="text-start" style="color: #ffff; text-align:justify">
          Learning Ecosystem adalah sebuah media belajar untuk pelatihan peningkatan 
          skills yang tersedia di platform ARSANA. Dikemas dengan metode blended 
          learning yang memudahkan sistem belajar secara real time maupun self learning. 
          Setiap tema akan disajikan dalam model asinkronus (belajar mandiri berupa video, modul, dll) 
          dan sinkronus (belajar secara live).
             </div>
            <!-- LINK HALAMAN SERVICE -->
            <a class="btn btn-white" href="/service" role="button">See More</a>
      </div>
    </div>
  </div>
</div>
</section>

<br>
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row align-items-center">
      <div class="col-xl-6 col-md-12 col-xs-12">
        <h4 class="text-start" style="color:black"><b>CONSULTING ECOSYSTEM</b></h1>
          <p class="text-start" style="color: black; text-align:justify">
          Kami menyediakan pelayanan konsultasi  dengan 
          praktisi/narasumber pengampu secara individu ataupun group, baik secara offline maupun online.
      </div>
      <div class="col-xs-12 col-md-12 col-xl-5 offset-xl-1 text-center">
        <img class="img-fluid" src="images/consultans_2.jpg" alt="">
      </div>
    </div>
  </div>
</div>
<br>

<!-- ======= layanan Section ======= -->
<section id="service" class="news">
<div class="container-fluid">
  <h1 class="mr-3" style="color:#BB0A1E">Layanan Terbaru</h1>
    <hr width="100%" noshade size="25%" style="color:#BB0A1E">
</div>
</section>
<br>

<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- ------------------ -->
    @for($i=1;$i<=$CpgL;$i++)
    <div class="carousel-item @if($i==1) active @endif">
      <div class="container justify-content-center col-md-10">
        <div class="row col-md-12">
          @for($ii=$i*3-2;$ii<=$i*3;$ii++)
            <div class="container col-md-4 mx-0">
              <div class="container col-md-12">
                <div class="cardcontainer">
                  <div class="photo">
                      <img src="{{asset('layanan/'.$layanan[$ii-1]->gambar)}}">
                      <div class="photos">Photos</div>
                  </div>
                  <div class="content">
                      <div class="container col-md-12">
                        <h4 class="txt4 col-md-12" style="margin-top:20px"><b>{{$layanan[$ii-1]->judul_layanan}}</b></h4>
                        <p class="txt2 col-md-12" style="margin-top:25px">{{\Illuminate\Support\Str::limit($layanan[$ii-1]->deskripsi, 40, $end='...')}} </p>
                      </div>
                  </div>
                  <div class="footer">
                      <p><a class="waves-effect waves-light btn" href="/viewlay/{{$layanan[$ii-1]->id}}">Read More</a></a></p>
                      <!-- <p class="txt3"><i class="far fa-clock"></i>10 Minutes Ago <span class="comments"><i class="fas fa-comments"></i>45 Comments</span></p> -->
                  </div>
                </div>
              </div>
            </div>
            @if($ii==$CitemL)
              @break
            @endif
          @endfor
        </div>
      </div>
    </div>
    @endfor
<!-- ------------ -->
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ======= layanan Section ======= -->

<br>
<!-- ======= Portofolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#BB0A1E">
      
      <div id="cards_landscape_wrap-2">
        <div class="container mt-1 col-xl-12 col-md-12 col-xs-12">
            <h1 style="color:#ffff;" class="text-center"><b>PORTFOLIO</b></h1>
          <div class="row">
          @foreach($portofolio as $portofolio)
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            {{-- <a href=""> --}}
            <div class="card-flyer">
              <div class="text-box">
                <div class="image-box">
                    <img src="{{asset('portofolio/'.$portofolio->gambar)}}" alt="" />
                </div>
              </div>
            </div>
            {{-- </a> --}}
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMMENT US -->
<section id="comment" class="comment">
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#ffff">
      <div class="row align-items-center">
        <div class="col-xs-12 col-md-12 col-xl-5 col-sm-12 mb-3 text-center">
        <iframe class="col-sm-12 col-md-12 col-xs-12 col-md-12 col-xl-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.09396980032147!2d110.4409368881141!3d-7.736292442644153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5bfc9a68e5cf%3A0x9797cbde4d86fc91!2sVilla%20Arsana!5e0!3m2!1sid!2sid!4v1657378890055!5m2!1sid!2sid" width="550" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-xs-12 col-md-12 col-sm-12 col-xl-5 offset-xl-1" >
            <h3 class="text-start" style="text-align: justify"><b>COMMENT FOR US</b></h3>
            <br>
            <div class="container-fluid">
              <form method="Post" action="/comment">
                @csrf
                <div class="form-group first">
                  <label for="username" style="color: black;">Name</label>
                  <input type="text" class="form-control" placeholder="Your Name" name="nama" >
                </div>
                <div class="form-group last mb-3">
                  <label for="password" style="color: black;">Email</label>
                  <input type="text" class="form-control" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comment</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn btn-danger btn-block">
                <!-- <hr width="100%" noshade size="25%" style="color:#BB0A1E">
                <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a> -->
              </form>
            </div>
            
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
      <div class="row align-items-center">
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
                            <div class="col-lg-4 col-md-6 mb-md-3 mb-3">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Ktut Rentyasti Palupi (Asti) </h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-md-3 mb-3">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">I Made Andi Arsana</h3>
                                        <span class="post">Marketing Consultant</span>
                                    </div>
                                    <ul class="social">
                                        <li>
                                            <a href="#" class="fa fa-envelope"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 mb-md-3 mb-3">
                                <div class="our-team">
                                    <div class="pic">
                                        <img src="images/a.png">
                                    </div>
                                    <div class="team-content">
                                        <h3 class="title">Pandu Henri </h3>
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