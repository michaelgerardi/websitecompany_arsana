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
    <h1 class="font-family">Table User</h1>
  <br>
  <!-- Button trigger modal -->
  
  <br>
  <table class="table">
    <thead>
    <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Edit</th>
          <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user as $row)
    <tr>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>@if($row->role_id==1) Murid @elseif($row->role_id==2) Admin @elseif($row->role_id==2) Pengajar @endif</td>
          <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
            Lihat Data Diri
        </button></td>
          <td><a class="btn btn-danger" role="button" href="/blogdelete/{{$row->id}}">Delete</a></td>
    </tr>
    <!-- Modal -->
<div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Portofolio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label for="exampleFormControlInput1">Bidang/Keahlian :</label>
            <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Perusahaan"readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Pengalaman :</label>
            <input name="tanggal_input"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Pendidikan Terakhir :</label>
            <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Perusahaan"readonly>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      </div>
         
    </div>
  </div>
</div>             
<!-- /.container-fluid -->
    @endforeach
    </tbody>
  </table>
  <br>

  </div>
</div>
@endsection