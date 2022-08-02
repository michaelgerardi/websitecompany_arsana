<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Section</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- NAVBAR STYLE -->
  <style>
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
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom ">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
    <img style="width: 90px; height:90px; border-radius:50%; margin-left:88px"  src="{{asset('images/logo IMA.jpeg')}}" alt="">
  </a>
    <ul class="navbar nav" style="margin-right: 60px;">
      <li class="nav-item">
        <a class="navbar-brand" href="#home">[+] Kategori</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="#news"> [+] Konten Blog</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<div class="container-fluid">
  <h1 class="font-family">Table Konten</h1>

<form action="" method="get">
  <label class="" for="kat">Kategori:</label>
  <select class="form-select" aria-label="Default select example" name="kat" id="kategori">
   @foreach($data_kategori as $kate)
    <option value="{{$kate->id}}">{{$kate->nama_kategori}}</option>
    @endforeach
  </select>
  <input class="btn btn-secondary" role="button" type="submit" value="Submit">
</form>
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
<br>
<table class="table">
  <thead>
   <tr>
        <th>Nama Blog</th>
        <th>Tanggal_blog</th>
        <th>Gambar</th>
        <th>Kategori</th>
        <th>Deskripsi</th>
        <th>Status</th>
        <th>Edit</th>
        <th>Delete</th>
   </tr>
   </thead>
   <tbody>
   @foreach($data_blog as $blog)
   <tr>
        <td>{{$blog->nama_blog}}</td>
        <td>{{$blog->tanggal_blog}}</td>
        <td><img src="{{asset('images/'.$blog->gambar)}}" height="100px" width="100px"></td>
        <td>{{$blog->nama_kategori}}</td>
        <td>{{$blog->keterangan}}</td>
        <td>@if($blog->status==0) Pending @elseif($blog->status==1) Setuju @endif</td>
        <td><a class="btn btn-warning" role="button" href="/Editblog/{{$blog->id}}">Edit</a></td>
        <td><a class="btn btn-danger" role="button" href="/blogdelete/{{$blog->id}}">Delete</a></td>
   </tr>
   @endforeach
   </tbody>
</table>
<br>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/blog/insert" method="POST" enctype="multipart/form-data">
     {{csrf_field()}}
     <div class="form-group">
        <label for="exampleFormControlInput1">Nama Blog</label>
        <input name="nama_blog"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
     <div class="form-group">
        <label for="exampleInputPegawai">Kategori</label>
        <select name="id_kategori" id="exampleInputPegawai"  aria-label="Default select example" class="form-select">
          @foreach ($data_kategori as $kategori)
            <option value={{$kategori->id}}>{{$kategori->nama_kategori}}</option>
          @endforeach
        </select>
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Blog</label>
        <input name="tanggal_blog"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>
     <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <textarea class="form-control" name="keterangan" id="" cols="30" rows="10"></textarea>
     </div>
     <div class="form-group">
        <label for="exampleFormControlInput1">File Gambar</label>
        <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
     </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="Submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</body>
</html>