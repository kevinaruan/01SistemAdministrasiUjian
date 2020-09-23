@include('Staff.header')
<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li><a href="{{ url('/Staff') }}">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active"><a href="" class="aBread">Jadwal ujian </a></li>
        </ol>
    </div><!--/.row-->

    
    <div class="col-lg-12" style="display: flex; justify-content: center;" >
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Jadwal</h1>
    </div>
    <div class="col-lg-12" class="container">
        <div class="row">
        <div class="col-lg-11">
            <button style="float: right" type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
                Import Jadwal
            </button>
    
            <!-- Import Excel -->
            <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form method="post" action="{{ url('/importJadwal') }}" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Import Jadwal</h5>
                            </div>
                            <div class="modal-body">
                                @csrf
    
                                <label>Pilih file </label>
                                <div class="form-group">
                                    <input type="file" name="file" required="required">
                                </div>
    
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Import</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
        <div class="col-lg-12" style="height: 2%">

        </div>

        <div class="col-lg-12">
            <div class="col-sm-10" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0; top:10%;">    
                <div class="wrap-table100" style="margin-bottom: 10%    ">
                    <div class="table100 mt-5">
                       @if (Session::has('error'))
                        <?php
                            if (!empty(Session::get('error'))) :
                        ?>
                        <div class="row">
                            <div class="col-xs-12 alert alert-danger alert-dismissible" role="alert">
                                <?php
                                    foreach (Session::get('error') as $error):
                                        echo $error."<br/>";
                                    endforeach;
                                ?>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            </div>
                        </div>
                        <?php
                            endif;
                        ?>
                    @endif
                        <table style="font-family: Segoe UI">
                            <thead>
                                <tr class="table100-head">
                                    <th class="column">Tanggal</th>
                                    <th class="column">Sesi</th>
                                    <th class="column">Kode Matakuliah</th>
                                    <th class="column">Matakuliah</th>
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
                                    <td class="column">
                                        @php
                                            if($jad->sesi=1){
                                                echo "08.00-09.00";
                                            }elseif ($jad->sesi=2) {
                                                echo "10.00-12.00";
                                            }elseif($jad->sesi=3){
                                                echo "13.00-15.00";
                                            }elseif($jad->sesi=4){
                                                echo "15.00-17.00";
                                            }
                                        @endphp
                                    </td>
                                    <td class="column">{{ $jad->kode_mk }}</td>
                                    <td class="column">{{ $jad->matakuliah }}</td>
                                    <td class="column">{{ $jad->jenis }}</td>
                                    <td class="column">{{ $jad->pengawas1 }}</td>
                                    <td class="column">{{ $jad->pengawas2 }}</td>
                                    <td class="column">{{ $jad->ruangan }}</td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-id="{{ $jad->id }}" data-target="#hapus" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</button>
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
 {{-- Modal Hapus --}}
 <div class="modal fade" id="hapus" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="text-align: center; font-family: Segoe UI;">
                <form role="form" action="{{ url('/hapusJadwal') }}" method="post">
                    @csrf
                   <input type="hidden" name="id" id="id">
                   <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus Data ?</h4>                                                           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">TIDAK</button>
                <button type="submit" class="btn btn-success">YA</button>
            </div>
                </form>
        </div>
    </div>
</div>                                                

</div>   
</div>

       
    </div><!-- /.row -->
</div><!--/.main-->
@include('Staff.footer')