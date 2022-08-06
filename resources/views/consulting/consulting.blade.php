@extends('layouts.navcompro')

@section('content')
<section id=service class="service">
    <div class="container-fluid">
        <h1 class="text-center" style="color: #BB0A1E;"><b>{{$data_layanan->judul_layanan}}</b></h1>
        <div class="jumbotron jumbotron-fluid" style="background-color: #ffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xl-6">
                    <img style="width: 12cm; height:7cm; margin-left:150px" src="{{asset('layanan/'.$data_layanan->gambar)}}" alt="">
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xl-6">
                    <h2 style="color:#BB0A1E; margin-left:60px;"><b>About This Service</b></h2>
                    <div class="decription; text-justify" style="color: black; margin-left:60px">
                    {{$data_layanan->deskripsi}}
                </div>
                </div>
            </div>
        </div>
        </div>

       
        
</section>
@endsection