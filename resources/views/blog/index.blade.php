@extends('layouts.navadmin')

@section('content')
<div id="content">
  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Search -->

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
          
          <!-- Dropdown - Messages -->
          
      </li>

      <!-- Nav Item - Alerts -->
      

      <!-- Nav Item - Messages -->
      

      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::guard('admin')->user()->name}}</span>
              <img class="img-profile rounded-circle"
                  src="img/undraw_profile.svg">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
              </a>
          </div>
      </li>

  </ul>

  </nav>
  <!-- End of Topbar -->
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
</div>
@endsection