@include('Staff.header')
<div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb" style="font-family: Segoe UI">
                <li>
                    <a href="{{ url('/Staff') }}"><em class="fa fa-home"></em></a>
                </li>
                <li class="active">
                    <a href="{{ url('/beritaAcara') }}" class="aBread">Berita Acara </a>
                </li>
                <li class="active">
                    <span style="font-family: 'Segoe UI'" class="aBread">Daftar Matakuliah </span>
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
    <div class="col-lg-12" style="margin-top: auto;font-family: Segoe UI;">
        <h1 class="" style="background-color: none;display: flex;justify-content: center;">Daftar Matakuliah</h1>
    </div>
    <div class="col-sm-8" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0;margin-top: 8%; ">    
        @if($errors->has('radio'))
        <div class="alert alert-danger" role="alert">{{ $errors->first('radio') }}</div>
         @endif
        <div class="col-lg-12" style="height: 85%;background-color:white; border-radius: 6px;box-shadow: 5px">
            <form action="{{ url('/DaftarBeritaAcara') }}"  method="POST">
                @csrf
            @foreach ($prodi->matakuliah as $MK)
            <div class="col-lg-4" style="margin-top: 4%"> 
                <label class="control control-radio"><h5>{{ $MK->NamaMatakuliah }}</h5>
                <input type="radio" name="radio" value="{{ $MK->kode_mk }}"/>
                    <div class="control_indicator"></div>
            </label>
        </div>
         @endforeach
     </div>
     <div class="col-lg-12" style="margin-top: 5%; margin-bottom: 5%">
        <a href="{{ url('/beritaAcara') }}" style="color: white;font-family: 'Segoe UI';">
            <button style="float: left" class="generate"><em class="glyphicon glyphicon-arrow-left">&nbsp;Back</em>
        </a>       
            <button type="submit" style="float: right" class="generate">Next &nbsp;&nbsp;<em class="glyphicon glyphicon-arrow-right"></em>  </button>    
     </div>
    </form>
    </div>

    
         
    </div>
</div>
</div>
</div>
</div>
        
    </div><!--/.row-->
</div>
@include('Staff.footer')