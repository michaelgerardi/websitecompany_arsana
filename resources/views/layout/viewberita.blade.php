@extends('layouts.navcompro')

@section('content')
<section id=service class="service">
    <div class="container-fluid">
        <h1 class="text-left" style="color: #BB0A1E; margin-left:60px"><b>{{$data_blog->nama_blog}}</b></h1>
        <p style="margin-left: 60px;">{{DB::table('users')->where('id', $data_blog->user_id)->value('name')}} | {{$data_blog->created_at}}</p>
        <div class="jumbotron jumbotron-fluid" style="background-color: #ffff;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12 col-xl-9">
                    <img style="width: 23cm; height:17cm; margin-left:60px" src="{{asset('images/'.$data_blog->gambar)}}" alt="">
                    <p class="text-justify" style="margin-left: 60px;margin-top:60px">
                {{$data_blog->keterangan}}
                </p>
                </div>
               
                </div>
            </div>
        </div>
        </div>

      
</section>
@endsection