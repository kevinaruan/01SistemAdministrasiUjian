<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrasi Ujian IT Del </title>
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="{{ asset('css/bootstrap-grid.min.css') }}" type="text/css" href="	">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
		Highcharts.chart('highChartGD7', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Kapasistas Ruangan'
    },
    subtitle: {
        text: 'Institut Teknologi Del'
    },
    xAxis: {
        categories: {!! json_encode($array_ruangan) !!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Kapasitas(mahasiswa)'
        }
    },
    
    series: [{
        name: 'ruangan',
        data: {!! json_encode($kapasitas) !!}

    }]
});

</script>


 
    <style>
     .error{ color:red; } 
    </style>
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
                <img src="">
            <a href="" class="logo navbar-brand"><span><img style="width: 100px" src="{{ asset('gambar/baru.png') }}"></a></span>
            <a class="navbar-brand" href="#"><span>Administrasi Ujian IT Del</a>
                <ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <em class="fa fa-bell"></em>
                       @foreach ($req as $requ)
                            @if ( $requ->status_pesan==1)
                            <span class="label label-danger">
                                {{ $req->count() }}
                            </span>
                            @endif
                       @endforeach
                        </a>
                           <ul class="dropdown-menu dropdown-alerts">
                               @foreach ($req as $request)
                               <li>
                                <a href="{{ url('/notifpesanStaff',[$request->id]) }}">
                                    <div><em class="fa fa-book"></em> 
                                        Request ujian : {{ $request->matakuliah }}
                                    </div>
                                </a>
                            </li>          
                               @endforeach
                               
						</ul> 
					</a>
						
					</li>
				</ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('gambar/ronaldo.jpg') }}" >
        </div>
        <div class="profile-usertitle" style="font-family: Segoe UI;">
            <div class="profile-usertitle-welcome"></span>welcome !!</div>
            <div class="profile-usertitle-name">{{Session::get('nama')}}</div>
            
        </div>
        <div class="clear"></div>
    </div>
    <ul class="nav menu" style="font-family: Segoe UI;">
        <li class="{{ (request()->is('Dosen')? 'active' : '') }}"><a href="{{ url('/Dosen') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li class="{{ (request()->is('requestDosen')? 'active' : '') }}"><a href="{{ url('/requestDosen') }}"><em class="fa fa-book">&nbsp;</em> Request Dosen</a></li>
        <li class="{{ (request()->is('statusRequest')? 'active' : '') }}"><a href="{{ url('/statusRequest') }}"><em class="fa fa-info-circle">&nbsp;</em> Status Request</a></li>
        <li><a href="{{ url('/logOut') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
        <i class="fa fa-file-import"></i>
    </ul>
</div><!--/.sidebar-->
    