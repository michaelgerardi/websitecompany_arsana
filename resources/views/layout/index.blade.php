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
<div class="container-fluid col-md-12">
  <div class="card-deck">
    @foreach($content as $row)
      <div class="card col-md-4" style="width: 18rem; background-color:#6C6B6B; border-radius:10%;">
      <img class="card-img-top" style="height:300px;max-width:200px;width: expression(this.width > 200 ? 200: true);" src="{{asset('images/'.$row->gambar)}}" alt="Card image cap" style="border-radius: 10%;">
        <div class="card-body">
          <h5 class="card-title" style="color: #ffff;">{{$row->nama_blog}}</h5>
          <p class="card-text"  style="color: #ffff;">{{\Illuminate\Support\Str::limit($row->keterangan, $limit = 150, $end = '...')}}</p>
        </div>
      </div>
      @endforeach
  </div>
</div>

<br>
<!-- ABOUT ARSANA -->
<div class="container-fluid">
  <div class="jumbotron" style="background-color:#ffff">
    <div class="row">
      <div class="col-lg-5 col-md-6 col-sm-12">
        <h4 style="color:black"><b>ABOUT ARSANA</b></h4>
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
<div class="col-lg-5 col-md-6 col-sm-12">
    <h1 style="color:black"><b>SERVICE</b></h1>
</div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="cards-wrapper">
      <div class="card">
        <img src="images/gambar1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/consulting" class="btn btn-danger">See More</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
        <img src="images/gambar1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/consulting" class="btn btn-danger">See More</a>
        </div>
      </div>
      <div class="card d-none d-md-block">
      <img src="images/gambar1.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="/consulting" class="btn btn-danger">See More</a>
        </div>
      </div>
    </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="cards-wrapper">
        <div class="card">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
        <div class="card d-none d-md-block">
        <img src="images/gambar1.jpg" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="/consulting" class="btn btn-danger">See More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
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
<section id="contact" class="contact">
  <div class="container-fluid">
    <div class="jumbotron" style="background-color:#2b2b2b; height:min-content; margin-bottom:-70px;">
      <div class="row">
      <div class="container">
      <div class="header my-5">
      <h1 style="color:white;" class="text-center">MEET OUR KEY PERSON</h1>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="img-block mb-5">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
            <div class="content mt-2 text-center">
              <h4 style="color: #ffff;">Zain Knob</h4>
              <p class="text-light">Chief Executive Officer</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="img-block mb-5">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
            <div class="content mt-2 text-center">
              <h4 style="color: #ffff;">Zain Knob</h4>
              <p class="text-light">Mechanical Engineer</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="img-block mb-5">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
            <div class="content mt-2 text-center">
              <h4 style="color: #ffff;">Zain Knob</h4>
              <p class="text-light">Mechanical Engineer</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="img-block mb-5">
            <img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/team/t4.jpg" class="img-fluid  img-thumbnail rounded-circle" alt="image1">
            <div class="content mt-2 text-center">
              <h4 style="color: #ffff;">Zain Knob</h4>
              <p class="text-light">Mechanical Engineer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@endsection