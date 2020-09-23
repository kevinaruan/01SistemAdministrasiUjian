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
			<h1 class="mt-5" style="display: flex;justify-content: center;">Daftar Label Ujian</h1>
        </div>
                <div class="col-lg-12" style=" position:absolute;margin-left:auto; margin-right:auto; margin-top:5%; margin-bottom:3%; left:0; right:0;display: flex;justify-content: center; top:15%;">
                    
                    <div class="container" >
                         <div class="row" >
                             <div class="col-lg-10">
                                <a href="{{ url('/cetakLabelUjian') }}" style="float: right;padding: 2%;font-size: 1.1em;" class="btn btn-primary button">
                                    <em class="fa fa-print"></em>&nbsp;&nbsp; Print
                                </a>
                             </div>
                            @foreach ($jadwal as $jadwal)
                            <div class="col-lg-5" style="margin-left: 5%;margin: 2%;;">
                                <table style="text-align: left;width: 100%">  
                                    <tr>
                                        <th>Hari/ Tanggal</th>
                                        <td>:</td>
                                        <td>@php
                                           echo date('d F Y', strtotime($jadwal->tanggal));
                                        @endphp </td>
                                    </tr>          
                                    <tr>                        
                                        <th>Kode MK</th>  
                                        <td>:</td>                    
                                         <td style="width: 200px;">{{ $jadwal->kode_mk }}</td>        
                                    </tr>
                                    <tr>
                                        <th>Nama Matakuliah</th>
                                        <td>:</td>
                                        <td>{{ $jadwal->matakuliah }}</td>
                                    </tr>                       
                                    <tr>
                                        <th>Jenis Ujian</th>
                                        <td>:</td>
                                        <td>{{ $jadwal->jenis }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Pengawas</th>
                                        <td>:</td>
                                        <td>{{ $jadwal->pengawas1 }}/{{ $jadwal->pengawas2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ruangan</th>
                                        <td>:</td>
                                        <td>{{ $jadwal->ruangan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pukul</th>
                                        <td>:</td>
                                        <td>
                                            @php
                                                if ($jadwal->sesi = 1) {
                                                    echo "08.00";
                                                }elseif ($jadwal->sesi =2) {
                                                    echo "10.00";
                                                }elseif ($jadwal->sesi=3) {
                                                    echo "13.00";
                                                }elseif ($jadwal->sesi=4) {
                                                    echo "15.00";
                                                }
    
                                            @endphp
                                        </td>
                                    </tr>
                                </table>
                            </div>   
                            @endforeach
                         </div>
                    </div>
                 </div>
         
             </div>
         
            </div>
        </div>
    </div>
		</div><!--/.row-->
    </div>	<!--/.main-->
@include('Staff.footer')