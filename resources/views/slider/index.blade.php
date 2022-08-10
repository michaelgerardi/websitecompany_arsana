@extends('layouts.navadmin')

@section('content')
<div id="content">
<h1>Table Slider</h1>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-button 30px; margin-left: 30px;">
                [+] Tambah Data Layanan
</button>
    <!-- table script -->
<!-- <style>
    .navbar-custom {
      background-color: #BB0A1E;
    }
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
      color: #ffff;
    }
  </style>

  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style> -->

  <!-- Tabel Style -->
  <!-- <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
  </style> -->
    <table class="table" style="margin-top:30px">
        <tr>
            <th>Nama Slider</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data_slider as $slider)
        <tr>
            
            <td>{{$slider->nama_slider}}</td>
            <td>{{$slider->tanggal_slider}}</td>
            <td><img src="{{asset('slider/'.$slider->gambar)}}" height="100px" width="100px"></td>
            <td>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modaledit{{$loop->iteration}}">
                            Edit
             </button>
            </td>
            <td><a class="btn btn-danger" role="button" href="/slidedelete/{{$slider->id}}">Delete</a></td>
                      <!-- Modal edit -->
                      <div class="modal fade" id="Modaledit{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data slider</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('ProsesEditslider')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Slider</label>
                            <input name="nama_slider"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Input</label>
                            <input name="tanggal_slider"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">File Gambar</label>
                            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="Submit" class="btn btn-primary">Save changes</button>
                            </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    <!-- /.modal edit -->
        </tr>
        @endforeach
    </table>
  <br>
         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/slider/insert" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Slider</label>
                            <input name="nama_slider"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Input</label>
                            <input name="tanggal_slider"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">File Gambar</label>
                            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>              
            <!-- /.modal -->
            </div>
<!-- End of Main Content -->
@endsection