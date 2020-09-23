@extends('Admin.header')
	@section('container')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="font-family: Segoe UI;">
				<li><a href="{{ url('/Admin') }}">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
    <div class="row">
			<div class="col-lg-12" style="background-color: none;height: 555px;">
				<div class="panel panel-default">
					<div class="col-lg-12" style="text-align: center;margin-top: 15%;">
						<h1>SELAMAT DATANG DI SISTEM ADMINISTRASI UJIAN INSTITUT TEKNOLOGI DEL</h1>
					</div>
	        	</div>
            </div>
	</div>

		</div>
	</div>
</div>                           
			
@endsection
@include('Admin.footer')