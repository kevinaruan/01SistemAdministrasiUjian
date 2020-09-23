@include('Dosen.header')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> --}}
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
  <div class="col-sm-12 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
      <div class="row">
          <ol class="breadcrumb" style="font-family: Segoe UI">
              <li>
                  <a href="{{ url('/Dosen') }}"><em class="fa fa-home"></em></a>
              </li>
              <li class="active">
                  <a href="{{ url('/requestDosen') }}" class="aBread">Request Dosen </a>
              </li>
              <li class="active">
                  <span style="font-family: 'Segoe UI'" class="aBread">Form Request Dosen </span>
              </li>
          </ol>
      </div><!--/.row-->
  <div style="height: 900px;background-color: none;">
      <div class="col-lg-12">
  
      </div>
  
      <div class="col-lg-12 mt-5" style="margin-top: auto;background-color: none;margin-top: 1%;display: flex;justify-content: center;	">
          <h1 class="" style="background-color: none; display: flex;justify-content: center;"><h1 style="font-family: Segoe UI;">Form Request Ujian</h1></h1>
      </div>
      <div class="col-lg-12 control-group" style="font-family: Segoe UI;width: 80%;height: 70%;background-color:none; position:absolute;margin-left:auto; margin-right:auto; margin-top:auto; margin-bottom:auto; left:0; right:0; top:15% ;display:flex;justify-content: center; ">
           <div class="col-lg-12" style="height: 100%;background-color:none; border-radius: 6px; border:1px solid gray;background-color: white;padding: 5%;display: flex;justify-content: center;">
              <form id="contact_us" action="{{ url('/reqDosen') }}" method="POST" style="font-family: Segoe UI;">
                  @csrf
                  <div class="col-lg-12" style="">
                      <input type="hidden" name="namaDosen" value="{{ Session::get('nama') }}">
                      <input type="hidden" name="matakuliah" value="{{ Session::get('nama_matakuliah') }}">
                      <input type="hidden" name="kode_mk" value="{{ Session::get('kode_mk') }}">
                      <div class="col-lg-2">
                          <label>Durasi</label>
                      </div>
                      <div class="col-lg-10">
                        <input type="text" name="durasi" class="form-control" placeholder="menit">
                        @if($errors->has('durasi'))
                                  <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('durasi') }}</span>
                                @endif
                      </div>
                  </div>  
                  <div class="col-lg-12 mt-5">
                      <div class="col-lg-2">
                          <label>Jenis Ujian</label>
                      </div>
                      <div class="col-lg-3">
                           <label class="control control-radio"><h5>Teori</h5>
                              <input type="radio" name="jenis" value="teori"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      <div class="col-lg-3">
                           <label class="control control-radio"><h5>Praktikum</h5>
                              <input type="radio" name="jenis" value="praktikum"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      @if($errors->has('jenis'))
                                  <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('jenis') }}</span>
                                @endif
                  </div>
  
                  <div class="col-lg-12 mt-5">
                      <div class="col-lg-2">
                          <label>Ruangan</label>
                      </div>
                      <div class="col-lg-3">
                           <label class="control control-radio"><h5>Kelas</h5>
                              <input type="radio" name="ruang" value="kelas"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      <div class="col-lg-4">
                           <label class="control control-radio"><h5>Laboratorium</h5>
                              <input type="radio" name="ruang" value="laboratorium"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      @if($errors->has('ruang'))
                                  <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('ruang') }}</span>
                                @endif
                  </div>
                  <div class="col-lg-12 mt-5">
                      <div class="col-lg-2">
                          <label>E-course</label>
                      </div>
                      <div class="col-lg-3">
                           <label class="control control-radio"><h5>YA</h5>
                              <input type="radio" name="Ecourse" value="ya"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      <div class="col-lg-4">
                           <label class="control control-radio"><h5>TIDAK</h5>
                              <input type="radio" name="Ecourse" value="tidak"/>
                                  <div class="control_indicator"></div>
                          </label>
                      </div>
                      @if($errors->has('ruang'))
                                  <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('ruang') }}</span>
                                @endif
                  </div>
  
                  <div class="col-lg-12 mt-5" style="">
                      <div class="col-lg-2">
                          <label>Catatan</label>
                      </div>
                      <div class="col-lg-10">
                          <textarea name="catatan" style="width: 50%;height: 150px;"></textarea>
                          @if($errors->has('catatan'))
                          <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('catatan') }}</span>
                        @endif
                      </div>
                     
                  </div>
  
                  <div class="col-lg-12 mt-5" style="">
                      <div class="col-lg-2">
                          <label>Jlh Mahasiswa</label>
                      </div>
                      <div class="col-lg-10">
                          <input type="text" class="form-control" name="jumlahMahasiswa" placeholder="jumlah mahasiswa">
                          @if($errors->has('jumlahMahasiswa'))
                      <span style="color: red;font-weight: bold;" role="alert">{{ $errors->first('jumlahMahasiswa') }}</span>
                    @endif
                      </div>
                      
                  </div> 
                
                  <div class="col-lg-12 mt-5">
                      <a href="formRequestDosenSucces.html">
                          <button type="submit" class="btn btn-info " class="btn btn-primary" style="margin-top: 5%;margin-bottom: 1%;float: right;"><span class="fa fa-paper-plane" ></span>  &nbsp;Kirim Request</button>
                      </a>
                  </div>
              </div>
              </form>
      
      </div>
  </div>
  </div>
  </div>
  @include('Dosen.footer')