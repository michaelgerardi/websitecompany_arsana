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
        <!-- Begin Page Content -->
        <div class="container-fluid col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Tabel Kategori</h1>
            </div>
            <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin: top 30px; margin: button 30%; margin: left 30px;">
                    [+] Tambah Data Kategori
                </button>

        
            <table class="table" style="margin: top 30px;">
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

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
                </div>
            </div>
            </div>
        <!-- /.container-fluid -->
        </div>
    
    <!-- End of Main Content -->
</div>
@endsection      