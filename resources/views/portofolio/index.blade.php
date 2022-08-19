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
    <h1 style="margin-left: 10px">Data Tabel Portofolio</h1>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
    <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 30px; margin-button 30px; margin-left: 30px;">
            [+] Tambah Data Portofolio
        </button>

    <table class="table" style="margin-top:30px;" >
        <tr>
            <th>Nama perusahaan</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($data_portofolio as $portofolio)
        <tr>
           
            <td>{{$portofolio->nama_perusahaan}}</td>
            <td>{{$portofolio->tanggal_input}}</td>
            <td><img src="{{asset('portofolio/'.$portofolio->gambar)}}" height="100px" width="100px"></td>
            <td>
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#Modaledit{{$loop->iteration}}">
                  Edit
              </button>
            </td>
            <!-- <td><a class="btn btn-warning" role="button" href="/editportofolio/{{$portofolio->id}}">Edit</a></td> -->
            <td><a class="btn btn-danger" role="button" href="/portofoliodelete/{{$portofolio->id}}">Delete</a></td>
            <!-- Modal edit -->
            <div class="modal fade" id="Modaledit{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
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
                            <form action="{{route('ProsesEditportofolio')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="id" value="{{$portofolio->id}}">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Nama perusahaan</label>

                              <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" value="{{$portofolio->nama_perusahaan}}" aria-describedby="emailHelp" >
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">Tanggal Input</label>
                              <input name="tanggal_input"type="date" class="form-control" id="exampleInputEmail1" value="{{$portofolio->tanggal_input}}" aria-describedby="emailHelp" >
                          </div>
                          <div class="form-group">
                              <label for="exampleFormControlInput1">File Gambar</label>
                              <input name="gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                              <b>Last File:</b><a href="{{asset('portofolio/'.$portofolio->gambar)}}" target="_blank">{{asset('portofolio/'.$portofolio->gambar)}}</a>

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
     {!! $data_portofolio->links() !!} 

     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Portofolio</h5>
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
      <form action="/portofolio/insert" method="POST" enctype="multipart/form-data">
        
        {{csrf_field()}}
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama perusahaan</label>
            <input name="nama_perusahaan"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Perusahaan">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal Input</label>
            <input name="tanggal_input"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">File Gambar</label>
            <input name="gambar"type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
      </div>
         
    </div>
  </div>
</div>             
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

        
@endsection