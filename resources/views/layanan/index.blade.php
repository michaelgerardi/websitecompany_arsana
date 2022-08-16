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
    <div class="container col-md-12">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Tabel Layanan</h1>
        </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-button 30px; margin-left: 30px;">
                [+] Tambah Data Layanan
            </button>
        <table class="table">
            <tr>
                <th>Nama layanan</th>
                <th>Jenis Layanan</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($data_layanan as $layanan)
                <tr>
                    <td>{{$layanan->judul_layanan}}</td>
                    <td>{{$layanan->jenis_layanan}}</td>
                    <td>{{$layanan->deskripsi}}</td>
                    <td><img src="{{asset('layanan/'.$layanan->gambar)}}" height="100px" width="100px"></td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modaledit{{$loop->iteration}}">
                            Edit
                        </button>
                    </td>
                    <td><a class="btn btn-danger" role="button" href="/layanandelete/{{$layanan->id}}">Delete</a></td>
                    <!-- Modal edit -->
                     <div class="modal fade" id="Modaledit{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Layanan</h5>
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
                            <form action="{{route('ProsesEditlayanan')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$layanan->id}}">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Judul Layanan</label>
                            <input name="judul_layanan"type="text" class="form-control" id="exampleInputEmail1" value="{{$layanan->judul_layanan}}" aria-describedby="emailHelp" placeholder="Nama Layanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Layanan</label>
                                <input name="jenis_layanan"type="text" class="form-control" id="exampleInputEmail1" value="{{$layanan->jenis_layanan}}" aria-describedby="emailHelp" placeholder="Jenis Layanan">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Gambar Layanan</label>
                                <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                                <b>Last File:</b><a href="{{asset('layanan/'.$layanan->gambar)}}" target="_blank">{{asset('layanan/'.$layanan->gambar)}}</a>
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{$layanan->deskripsi}}</textarea>
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
        {!! $data_layanan->links() !!} 
        
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
                    @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif
                        <form action="/layanan/insert" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul Layanan</label>
                            <input name="judul_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Layanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Layanan</label>
                            <input name="jenis_layanan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Layanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gambar Layanan</label>
                            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Blog">
                        </div>
                        <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Layanan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                        </div>
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

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
</div>
<!-- End of Main Content -->
@endsection
            