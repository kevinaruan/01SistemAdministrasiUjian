@include('Staff.header')
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li><a href="{{ url('/Staff') }}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active"><a href="{{ url('/daftarHadir') }}" class="aBread">Request Dosen </a></li>
            <li class="active">
                <span style="font-family: 'Segoe UI'" class="aBread">Form Daftar Hadir </span>
            </li>
        </ol>
    </div><!--/.row-->
    <div class="col-lg-12" style="display: flex; justify-content: center;" >
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Daftar Hadir</h1>
    </div>
    <div class="col-lg-12" class="container">
        <div class="row">

    <div class="col-lg-11">
        <a href="{{ url('/cetakDaftarHadir',[$kode]) }}" style="float: right" class="btn btn-primary button">
            <em class="fa fa-print"></em>&nbsp;&nbsp; Print
        </a>
    </div>
    <div class="col-lg-12" style="height: 2%">

    </div>
        <div class="col-lg-12">
            <div class="col-sm-10" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0; top:10%;">    
                <div class="wrap-table100" style="margin-bottom: 10%    ">
                    <div class="table100 mt-5">
                        <table style="font-family: Segoe UI">
                            <thead>
                                <tr class="table100-head">
                                    <th class="column">Nama Mahasiswa</th>
                                    <th class="column">NIM</th>
                                    <th class="column">Kode Matakuliah</th>
                                    <th class="column">Nama Matakuliah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftar as $daf)
                                <tr>
                                    <td class="column">{{ $daf->nama_mahasiswa  }}</td>
                                    <td class="column">{{ $daf->nim_mahasiswa  }}</td>
                                    <td class="column">{{ $daf->kode_mk }}</td>
                                    <td class="column">{{ $daf->nama_matakuliah  }}</td>
                                </tr> 
                                @endforeach
                                    
                                    
                            </tbody>
                        </table>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

    </div><!-- /.row -->
</div><!--/.main-->
@include('Staff.footer')