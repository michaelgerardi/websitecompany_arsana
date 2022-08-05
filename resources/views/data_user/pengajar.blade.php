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
    <h1 class="font-family">Table Pengajar</h1>
  <br>
  <!-- Button trigger modal -->
  
  <br>
  <table class="table">
    <thead>
    <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user as $row)
    <tr>
          <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>@if($row->role_id==1) Murid @elseif($row->role_id==2) Admin @elseif($row->role_id==2) Pengajar @endif</td>
    </tr>
    @endforeach
    </tbody>
  </table>
  <br>

  </div>
</div>
@endsection