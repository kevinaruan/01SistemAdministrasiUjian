@extends('Admin.header')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb" style="font-family: Segoe UI">
            <li>
                <a href="{{ url('/Admin') }}"><em class="fa fa-home"></em></a>
            </li>
            <li class="active">
                <a href="{{ url('/DataPengguna') }}" class="aBread">Pengguna </a>
            </li>
            <li class="active">
                <a href="{{ url('/dataDosen/{dosen}') }}" class="aBread">Data Dosen </a>
            </li>
        </ol>
    </div>
    <div class="col-lg-12" style="display: flex; justify-content: center;background-color: none;">
        <h1 class="mt-5" style="dtransform: translate(-30%);font-family: Segoe UI">Data Dosen</h1>
    </div>

<div class="col-lg-12">
    <div class="col-sm-10" style="position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0; top:10%;">    
        <div class="wrap-table100" style="margin-bottom: 10%">
            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modalForm" type="button" class="btn btn-primary" style="margin-top: 5%;margin-bottom: 1%;"><span class="fa fa-plus" ></span>  &nbsp;Tambah Dosen</button>
            <div class="table100 mt-5">
                <table style="font-family: Sagoe UI">
                    <thead>
                        <tr class="table100-head"  style="font-family: Segoe UI;">
                            <th class="column">#</th>
                            <th class="column">Nama Dosen</th>
                            <th class="column">Username</th>
                            <th class="column">Role</th>
                            <th class="column">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $user)
                            <tr>
                                <td class="column">{{$loop->iteration}}</td>
                                <td class="column">{{ $user->name }}</td>
                                <td class="column">{{ $user->username }}</td>
                                <td class="column">{{ $user->role }}</td>
                                <td style="padding: 1%;" class="column">
                                    <button data-toggle="modal" data-nama="{{ $user->name }}" data-id="{{ $user->ID }}" data-username="{{ $user->username }}" data-role="{{ $user->role }}" class="btn btn-warning" data-target="#editPengguna"><span class="fa fa-pencil" ></span> Edit</button>&nbsp;
                                    <button type="button" data-toggle="modal" data-id="{{ $user->ID }}" data-target="#hapus" class="btn btn-danger"><span class="fa fa-trash"></span> Hapus</button>
                                </td>
                            </tr>                           
                            
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>











            <!-- Modal Tambah-->
            <div id="modalForm" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Tambah Dosen</h4>
                    </div>
                    <div class="modal-body">
                          <form action="{{ url('/DataPengguna')  }}" method="post">
                              @csrf 
                              <input type="hidden" name="role" value="{{ $data }}">
                              <div class="form-group">
                                  <label for="name">Nama Dosen</label>
                                  <input type="text" name="namaPengguna" class="form-control" id="name" placeholder="Nama Dosen">
                                  @if($errors->has('namaPengguna'))
                                  <div class="alert alert-danger" role="alert">{{ $errors->first('namaPengguna') }}</div>
                                @endif
                                
                                </div>
                              <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                @if($errors->has('username'))
                                  <div class="alert alert-danger" role="alert">{{ $errors->first('username') }}</div>
                                @endif
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                @if($errors->has('password'))
                                  <div class="alert alert-danger" role="alert">{{ $errors->first('password') }}</div>
                                @endif
                              </div>
                              <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="confirmation" class="form-control" id="password" placeholder="Password">
                                @if($errors->has('confirmation'))
                                  <div class="alert alert-danger" role="alert">{{ $errors->first('confirmation') }}</div>
                                @endif
                              </div>
                          </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                          <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah</button>
                      </form>
                      </div>
                  </div>

                </div>
              </div>



            <!-- Modal edit -->
            <div class="modal fade" id="editPengguna" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel" style="text-align: left;font-family: Segoe UI;">Edit Pengguna</h4>
                        </div>
                        <div class="modal-body">
                            <p class="statusMsg"></p>
                            <form role="form" action="{{ url('/updatePengguna') }}" method="post">
                                @csrf
                                <input type="hidden" name="role" value="{{ $data }}">
                                <div class="form-group">                                    
                                    <input type="hidden" name="id" class="form-control" id="id" placeholder="id">
                                    <label for="name">Nama Dosen</label>
                                    <input type="text" name="namaPengguna" class="form-control" id="namaPengguna" placeholder="Nama Dosen">
                                  </div>
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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
                    <form role="form" action="{{ url('/hapusPengguna') }}" method="post">
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