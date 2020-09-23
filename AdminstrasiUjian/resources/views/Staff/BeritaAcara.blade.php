@extends('Staff.header')
	<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb" style="font-family: Segoe UI">
				<li>
					<a href="{{ url('/Staff') }}"><em class="fa fa-home"></em></a>
				</li>
				<li class="active">
					<a href="" class="aBread">Daftar Hadir </a>
				</li>
			</ol>
		</div><!--/.row-->
	<div style="height: 555px;background-color: none;font-family: Segoe UI" >
		<div class="col-lg-12" style="margin-top: auto;">
			<h1 class="mt-5" style="display: flex;justify-content: center;">Berita Acara</h1>
		</div>
		<div class="col-lg-12" style="width: 80%;height: 40%;background-color: none; position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0;display: flex;justify-content: center; top:15%;">
			 <div class="col-lg-12 mt-5" style="width: 100%;height: 60%;font-family: Segoe UI">
            @foreach ($fakultas		 as $fal)
            <div class="btn-group" style="width: 90%;font-family: Segoe UI">
                <button type="button" class="btn myButton mt-5" style="  width: 80%; margin-left:10%; margin-right:auto; left:0; right:0; top:0; bottom:0;font-family: Segoe UI">{{ $fal->NamaFakultas }}</button>
                <button type="button" class="btn myButton btn-lg dropdown-toggle mt-5 ml-2" border="1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu" style="font-family: Segoe UI;">
                    @foreach ($fal->prodi as $pro )
					<li><a href="{{ url('/staff/BeritaAcaraMatakuliah',[$pro->id]) }}"> {{ $pro->NamaProdi }}</a></li>      
                @endforeach
                </ul>
              </div>    
            @endforeach
	</div>
</div>

</div>
		</div><!--/.row-->
    </div>	<!--/.main-->
@include('Staff.footer')