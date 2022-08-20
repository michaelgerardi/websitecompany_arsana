@extends('layouts.navcompro')

@section('content')
<section id=service class="service">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12 text-center">
                <h1 style="color: #BB0A1E;"><b>{{$data_layanan->judul_layanan}}</b></h1>
            </div>
        </div>
        <div class="jumbotron" style="background-color: #ffff;">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-12 col-xs-12 mb-3 text-center">
                    <img class="img-fluid" style="width: 12cm; height:7cm;" src="{{asset('layanan/'.$data_layanan->gambar)}}" alt="">
                </div>
                <div class="col-xs-12 col-md-12 col-xl-5">
                    <h2 style="color:#BB0A1E"><b>About This Service</b></h2>
                    <p class="text-justify" style="color: black">{{$data_layanan->deskripsi}}</p>
                </div>
            </div>
        </div>

       
        
</section>
@endsection