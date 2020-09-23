@extends('Admin.header')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li>
                <a href="{{ url('/Admin') }}"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="{{ url('/Fakultas') }}" class="aBread">Fakultas</a>
            </li>
            <li class="active">
                <a href="{{ url('/DataFakultas') }}" class="aBread">Data Fakultas</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-12" style="display: flex; justify-content: center;">
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Data Fakultas</h1>
    </div>    

<div class="col-lg-12">
    <div class="col-sm-10" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0; top:10%;">    
        <div class="wrap-table100" style="margin-bottom: 10%    ">
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modalForm" type="button" class="btn btn-primary" style="margin-top: 5%;margin-bottom: 1%;"><span class="fa fa-plus" ></span>  &nbsp;Tambah Fakultas</button>
            <div class="table100 mt-5">
                <table style="font-family: Segoe UI">
                    <thead>
                        <tr class="table100-head">
                            <th class="column">No</th>
                            <th class="column">Nama Fakultas</th>
                            <th class="column">Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                            @foreach ($fakultas as $fal)                     
                            <tr>
                                <td class="column">{{$loop->iteration}}</td>
                                <td class="column">{{ $fal->NamaFakultas }}</td>
                                <td style="padding: 1%;" class="column">
                                    <button data-toggle="modal" data-test="{{ $fal->NamaFakultas }}" data-id="{{ $fal->id }}" class="btn btn-warning" data-target="#edit"><span class="fa fa-pencil" ></span> Edit</button>&nbsp;
                                    <button type="button" data-toggle="modal" data-id="{{ $fal->id }}" data-target="#hapus" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</button>
                                </td>       
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


{{-- Modal tambah --}}
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tambah Fakultas</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form action="{{url('/DataFakultas')}}"  method="post">
                    @csrf                                          
                        <div class="form-group required">
                            @if($errors->has('namaFakultas'))
                                <div class="alert alert-danger" role="alert">{{ $errors->first('namaFakultas') }}</div>
                            @endif
                           <label for="inputName">Nama Fakultas</label>
                           <input type="text" name="namaFakultas" class="form-control" id="inputName" placeholder="Nama Fakultas" />
                           
                        </div> 
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submitBtn"><em class="fa fa-plus"></em> Tambah</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Tutup Modal Tambah --}}

 <!-- Modal edit -->
<div class="modal fade" id="edit" role="dialog">
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
                <form role="form" action="{{ url('/updateFakultas') }}" method="post">
                    @csrf
                    <div class="form-group" style="text-align: left;">
                        <label for="inputName">Nama Fakultas</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="namaFakultas" class="form-control" id="nama" placeholder="Nama Fakultas" />
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

            
    {{-- Modal Hapus --}}
    <div class="modal fade" id="hapus" role="dialog">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="text-align: center; font-family: Segoe UI;">
                    <form role="form" action="{{ url('/hapusFakultas') }}" method="post">
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

@include('Admin.footer')