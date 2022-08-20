@extends('layouts.navcompro')

@section('content')
<section id=service class="service">
    <div class="container-fluid col-xl-12 col-md-12 col-xs-12">
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <h1 class="text-left" style="color: #BB0A1E;"><b>{{$data_blog->nama_blog}}</b></h1>
                <p>{{DB::table('users')->where('id', $data_blog->user_id)->value('name')}} | {{$data_blog->created_at}}</p>
            </div>
                
                <div class="container">
                    <div class="jumbotron" style="background-color: #ffff;">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-xs-12 text-center">
                                <img class="img-fluid mb-3" style="width: 1000px" height="800px" src="{{asset('images/'.$data_blog->gambar)}}" alt="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-xs-12">
                                <p class="text-justify">{{$data_blog->keterangan}}</p>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>

      
</section>
@endsection