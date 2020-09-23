@include('Staff.header')
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li><a href="{{ url('/Staff') }}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active"><a href="{{ url('/requestDosenStaff') }}" class="aBread">Request Dosen </a></li>
        </ol>
    </div><!--/.row-->

    
    <div class="col-lg-12" style="display: flex; justify-content: center;background-color: none;">
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Request Dosen</h1>
    </div>
    <div class="col-lg-11" style="margin-bottom: 10%;">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 2%;">
                <div class="col-lg-12" style="margin: 5px;">
                    <a href="{{ url('/cetakAllrequest') }}" style="float: right" class="btn btn-primary button">
                        <em class="fa fa-print"></em>&nbsp;&nbsp; Print
                    </a>    
                </div>                
                
                    <div class="container">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table style="font-family: Segoe UI">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column">Nama Dosen</th>
                                            <th class="column">Matakuliah</th>
                                            <th class="column">Tipe Ujian</th>
                                            <th class="column">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($request as $req)
                                        <tr>
                                            <td class="column">
                                                @php
                                                    if ($req->status==1||$req->status==0) {
                                                        echo('<span class="label label-danger" style="margin-left: 0%;margin-right: 2px;"><em class=" fa fa-exclamation"></em></span>');
                                                    }
                                                    echo($req->nama_dosen );
                                                @endphp
                                                
                                            </td>
                                            <td class="column">{{ $req->matakuliah }}</td>
                                            <td class="column">{{ $req->jenis_ujian  }}</td>
                                            <td class="column">
                                                <a href="{{ url('/requestDosen/detail',[$req->id]) }}" class="btn btn-primary">
                                                    <em class="fa fa-eye"></em> View
                                                </a>
                                                @if ($req->status==2 ||$req->status==3)
                                                <a href="{{ url('/hapusrequestDosen',[$req->id]) }}" class="btn btn-danger">
                                                    <em class="fa fa-trash">&nbsp;&nbsp;Hapus</em> 
                                                </a>
                                                @endif
                                            </td>  
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
    
</div>
</div>
    </div><!-- /.row -->
</div><!--/.main-->
@include('Staff.footer')