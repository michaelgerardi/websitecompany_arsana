@extends('layouts.navuser')

@section('content')
    <!-- Main Content -->
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">@if(Auth::guard('web')->check()) {{Auth::guard('web')->user()->name}} @elseif(Auth::guard('pengajar')->check()) {{Auth::guard('pengajar')->user()->name}} @endif</span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        
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
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            @if(session()->has('successreq'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Permintaan Sudah Masuk!</h4>
                <p>Permintaan Menjadi Pengajar Anda Akan Direview Oleh Admin, Terimakasih.</p>
                <hr>
            </div>
            @endif
            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Role</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">@if(Auth::guard('web')->check()) Murid @elseif(Auth::guard('pengajar')->check()) Pengajar @endif</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas @if(Auth::guard('web')->check()) fa-graduation-cap @elseif(Auth::guard('pengajar')->check()) fa-university @endif fa-2x text-gray-300"></i>
                                </div>
                                @if(Auth::guard('web')->check()) 
                                @if(DB::table('detail_user')->where('user_id', Auth::user()->id)->value('id')==null)
                                <div class="container mt-1 pl-0">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalreq">Request Menjadi Pengajar</button>
                                </div>
                                @else
                                <div class="container mt-1 pl-0">
                                Menunggu Konfirmasi Menjadi Pengajar.
                                </div>
                                @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ------modal----- -->
                @if(Auth::guard('web')->check()) 
                <div class="modal fade" id="modalreq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Diri</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('insertreq')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{Auth::user()->id}}" name="id">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Bidang/Keahlian :</label>
                            <input name="bidang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Pengalaman :</label>
                            <input name="pengalaman" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Pendidikan Terakhir :</label>
                            <input name="pdd_terakhir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="Submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                @endif
                <!-- ------/modal----- -->
                <!-- Earnings (Monthly) Card Example -->
                
                <!-- Earnings (Monthly) Card Example -->
                

                <!-- Pending Requests Card Example -->
                
            </div>   
        </div>
        <!-- /.container-fluid -->
        <div class="row col-md-12">
            <div class="col-md-4">
                <div id="container"></div>
            </div>
            <div class="col-md-4">
                <div id="datamasuk"></div>
            </div>
            <div class="col-md-4">
                <div id="piechart"></div>
            </div>
        </div>
        <script>
                Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Data Konten Approval'
                },
                subtitle: {
                    text: 'Source: WorldClimate.com'
                },
                xAxis: {
                    categories: [<?php
                                    foreach($bulan as $row2){
                                    echo "'".$row2->month."',";   
                                    }
                                ?>],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah (Konten)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} Konten</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Setuju',
                    data: [<?php
                                    foreach( $data_setuju as $row2){
                                    echo $row2->total_setuju.",";   
                                    }
                                ?>]

                }, {
                    name: 'Tidak Setuju',
                    data: [<?php
                                    foreach( $data_tidaksetuju as $row2){
                                    echo $row2->total_tidaksetuju.",";   
                                    }
                                ?>]

                }]
            });
        </script>
        <script>
                Highcharts.chart('datamasuk', {

            title: {
                text: 'Data Konten Perbulan'
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Number of Employees'
                }
            },

            xAxis: {
                categories: [<?php
                                    foreach($bulan as $row2){
                                    echo "'".$row2->month."',";   
                                    }
                                ?>],
                crosshair: true
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
            },

            series: [{
                name: 'Data Konten',
                data: [<?php
                                    foreach( $data_konten as $row2){
                                    echo $row2->total_data.",";   
                                    }
                                ?>]
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

            });
                
        </script>
        <script>
                Highcharts.chart('piechart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Data Konten Kategori'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'Brands',
                    colorByPoint: true,
                    data: [<?php
                    foreach( $data_grafikpie as $row2){
                        echo "{"
                        ."name:"."'".$row2->nama_kategori."',"
                        ."y:".$row2->jumlah."
                        },"; 
                    }
                    ?>]
                }]
            });              
        </script>
    </div>
    <!-- End of Main Content -->
@endsection
           