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
    <div class="col-lg-12" style="display: flex; justify-content: center;">
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Rekap Ujian</h1>
    </div>
   
    <div class="col-lg-12" >
        <div class="row" >
            <div class="col-lg-12">
                    <div class="col-lg-12">
                        <a style="float: right;margin: 1%;" href="{{ url('/rekap/Export') }}" class="btn btn-primary my-3" target="_blank"><em class="fa fa-download"></em> &nbsp;&nbsp;Download</a>     
                    </div>
                    <div class="container">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table style="font-family: Segoe UI">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column">Tanggal </th>
                                            <th class="column">Kode MK</th>
                                            <th class="column">Nama Matakuliah</th>
                                            <th class="column">Jenis Ujian</th>
                                            <th class="column">Pengawas1</th>
                                            <th class="column">Pengawas2</th>
                                            <th class="column">Ruangan</th>
                                            <th class="column">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($jadwal as $jad)
                                        <tr>
                                            <td class="column">{{ $jad->tanggal }}</td>
                                            <td class="column">{{ $jad->kode_mk }}</td>
                                            <td class="column">{{ $jad->matakuliah }}</td>
                                            <td class="column">{{ $jad->jenis }}</td>
                                            <td class="column">{{ $jad->pengawas1 }}</td>
                                            <td class="column">{{ $jad->pengawas2 }}</td>
                                            <td class="column">{{ $jad->ruangan }}</td>
                                            <td>
                                                <button data-toggle="modal" data-id="{{ $jad->id }}" data-pengawas1="{{ $jad->pengawas1 }}" data-pengawas2="{{ $jad->pengawas2 }}" class="btn btn-warning" data-target="#editPengawas"><span class="fa fa-pencil" ></span> Edit</button>&nbsp;
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
        <div class="modal fade" id="editPengawas" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="text-align: left;font-family: Segoe UI;">Edit Pengawas</h4>
                    </div>
                    <div class="modal-body">
                        <p class="statusMsg"></p>
                        <form role="form" action="{{ url('/rekapitulasi/edit') }}" method="post">
                            @csrf
                            <div class="form-group" style="text-align: left;">
                                <label for="inputName">Pengawas1</label>
                                @if ($errors->has('namaPengawas1'))
                                <div class="alert alert-danger" role="alert">{{ $errors->first('namaPengawas1') }}</div>
                                @endif
                                <input type="hidden" name="id" id="id">
                                <input type="text" name="namaPengawas1" class="form-control" id="namapengawas1" placeholder="Nama Pengawas1" />
                            </div>   
                            <div class="form-group">
                                <label for="role">Pengawas2</label>
                                @if ($errors->has('namaPengawas2'))
                                <div class="alert alert-danger" role="alert">{{ $errors->first('namaPengawas2') }}</div>
                                @endif
                                <input type="hidden" name="id" id="id">
                                <input type="text" name="namaPengawas2" class="form-control" id="namapengawas2" placeholder="Nama Pengawas2" />
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
    
</div>
</div>
</div>

    </div><!-- /.row -->
</div><!--/.main-->
@include('Staff.footer')