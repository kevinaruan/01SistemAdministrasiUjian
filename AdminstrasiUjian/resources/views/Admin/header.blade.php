<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrasi Ujian IT Del </title>
	<link href=" {{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css ') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css ') }}" rel="stylesheet">
	<link rel="{{ asset('/css/bootstrap-grid.min.css') }}" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

	<body class="hold-transition sidebar-mini layout-boxed">
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
					<img src="">
				<a href="" class="logo navbar-brand"><span><img style="width: 120px;" src=" {{url('/gambar/baru.png')}}" ></a></span>
				<a class="navbar-brand" href="#"><span>Administrasi Ujian IT Del</a>

					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="{{url('/gambar/ronaldo.jpg')}}" >
			</div>
			<div class="profile-usertitle" style="font-family: Segoe UI">
				<div class="profile-usertitle-welcome"></span>welcome !!</div>
				<div class="profile-usertitle-name">{{Session::get('nama')}}</div>
				
			</div>
			<div class="clear"></div>
		</div>
		<ul class="nav menu" style="font-family: Segoe UI">
			<li class="{{ (request()->is('Admin')? 'active' : '') }}"><a href="{{ url('/Admin')}}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="{{ (request()->is('DataPengguna')? 'active' : '') }}"><a href=" {{ url('/DataPengguna')}}"><em class="fa fa-user">&nbsp;</em> Pengguna</a></li>
			<li class="{{ (request()->is('Fakultas')? 'active' : '') }}"><a href="{{url('/Fakultas')}}"><em class="fa fa-list">&nbsp;</em> Fakultas</a></li>
			<li class="{{ (request()->is('matakuliah')? 'active' : '') }}"><a href="{{url('/matakuliah')}}" ><em class="fa fa-newspaper-o">&nbsp;</em> Mata Kuliah</a></li>
			<li><a href="{{ url('/logOut') }}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			<i class="fa fa-file-import"></i>
		</ul>
	</div><!--/.sidebar-->

	@yield('container')
	
	