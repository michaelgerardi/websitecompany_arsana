<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konten Section</title>
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

  <!-- Tabel Style -->
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
<h1>Tabel kategori</h1>

<table class="table">
  <thead>
    <tr>
        <th>Nama Kategori</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_kategori as $kategori)
    <tr>
        <td>{{$kategori->nama_kategori}}</td>
        <td><a class="btn btn-warning" role="button" href="/EditKategori/{{$kategori->id}}">Edit</a></td>
        <td><a class="btn btn-danger" role="button" href="/kategoridelete/{{$kategori->id}}">Delete</a></td>
    </tr>
    @endforeach
  </tbody>  
</table>
<br>
<form action="/kategori/insert" method="POST">
      {{csrf_field()}}
      <div class="form-group has-feedback{{$errors->has('nama_kategori') ? 'has-error' : ''}}">
        <label class="control-label col-sm-2" for="email">Nama Kategori :</label>
        <div class="col-sm-10">
        <input name="nama_kategori" type="text" class="form-control" id="email" placeholder="Nama Kategori" >
          @if ($errors->has('nama_kategori'))
                <span class="help-block">
                    <p style="color: red">{{$errors->first('nama_kategori')}}</p>
                </span>
          @endif
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>