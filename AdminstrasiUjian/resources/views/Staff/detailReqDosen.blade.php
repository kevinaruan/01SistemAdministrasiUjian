<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrasi Ujian IT Del </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

@include('Staff.header')		
	<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="font-family: Segoe UI">
				<li><a href="{{ url('/Staff') }}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active"><a href="{{ url('/requestDosenStaff') }}" class="aBread">Request Dosen </a></li>
				<li class="active"><a href="" class="aBread">Detail Request Dosen </a></li>
			</ol>
		</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-12" style="margin-top: auto;">
			<h1 class="mt-5" style="margin-left: 50%; transform: translate(-30%);">{{ $request->nama_dosen }}</h1>
		</div>
		<div class="col-lg-11 mt-5">
			<a href="{{ url('/cetakdetailReqDosen',[$request->id]) }}" style="float: right" class="btn btn-primary button">
				<em class="fa fa-print"></em>&nbsp;&nbsp; Print
			</a>
		</div>
			<div class="col-lg-12 mt-5 data">
                <div class="col-lg-12 mt-2 data">
                    
				<div class="col-lg-2 mt-2">Nama Dosen</div>
					<div class="col-lg-9">
					<div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->nama_dosen }}
					</div>	
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Kode MK</div>
					<div class="col-lg-9"><div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->kode_mk }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Nama MK</div>
					<div class="col-lg-9">
					<div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->matakuliah }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Durasi</div>
					<div class="col-lg-9"><div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->durasi }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Jenis Ujian</div>
					<div class="col-lg-9"><div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->jenis_ujian }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Ruangan</div>
					<div class="col-lg-9"><div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->ruangan }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">E-ecourse</div>
					<div class="col-lg-9"><div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 35px;border-radius: 3px;" type="">
						&nbsp;{{ $request->ecourse }}
					</div>
					</div>	
				</div>

				<div class="col-lg-12 mt-2 data">
					<div class="col-lg-2 mt-2">Catatan</div>
					<div class="col-lg-9">
						<div style="padding: 1%;background-color: white;border:1px solid lightgray;width: 100%; height: 50px;border-radius: 3px;" type="">
						&nbsp;{{ $request->catatan }}
					</div>
					</div>	
				</div>

				@if ($request->status==0||$request->status==1)
				<div class="col-lg-11" style="margin-top: 20px;">
					<a href="{{ url('/requestDosenStaff') }}" style="color: white;font-family: 'Segoe UI';">
						<button style="float: left; margin: 10px;" class="btn btn-primary"><em class="glyphicon glyphicon-arrow-left">&nbsp;Back</em>
					</a>
					<a href="{{ url('/konfirmasi/diterima',[$request->id]) }}" style="color: white;font-family: 'Segoe UI';">
					<button class="btn btn-success" style="float: right;margin: 10px;padding: 10px;"><span class="fa fa-check" ></span>&nbsp;Terima</button>
					</a>
					<button data-toggle="modal" data-target="#terima" data-id="{{ $request->id }}" class="btn btn-danger" style="float: right;margin: 10px;padding: 10px;"><span class="fa fa-ban" ></span>&nbsp;Tolak</button>

				</div>
				@else
				<div class="col-lg-11" style="margin-top: 20px;">
					<a href="{{ url('/requestDosenStaff') }}" style="color: white;font-family: 'Segoe UI';">
						<button style="float: left; margin: 10px;" class="btn btn-primary"><em class="glyphicon glyphicon-arrow-left">&nbsp;Back</em>
					</a>
				</div>
				@endif
				

			</div>

			<div class="modal fade" id="terima" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<!-- Modal Header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span>
								<span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title" id="myModalLabel" style="text-align: left;font-family: Segoe UI;">Edit Fakultas</h4>
						</div>
						<div class="modal-body">
							<p class="statusMsg"></p>
							<form role="form" action="{{ url('/konfirmasi/ditolak') }}" method="post">
								@csrf
								<div class="form-group" style="text-align: left;">
									<label for="inputName">Pesan </label>
									<input type="hidden" name="id" id="id">
									@if($errors->has('pesan'))
									<p class="alert alert-danger" role="alert" style="height: 2%">{{ $errors->first('pesan') }}</p>
									@endif
									<textarea type="text" name="pesan" class="form-control" id="nama" placeholder="pesan"></textarea>
								</div>                                                   
						</div>
						
						<!-- Modal Footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-success submitBtn"><em class="fa fa-pencil"></em> Simpan</button>
						</div>
						</form>
			
							</div>
							</div>
						</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@include('Staff.footer')