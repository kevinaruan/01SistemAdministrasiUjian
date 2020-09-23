<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>{{ $jadwal->matakuliah }}</title>
    <style>
        td{
            padding: 5px;
        }
        th{
            text-align: left;
        }
        tr{
            font-family: 'Times New Roman', Times, serif; 
            padding: 2px;
            text-align: left;
        }
    </style>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">     
               <div class="col-lg-12">
                   <div class="col-lg-12" >
                       <P style="text-align: center;font-weight: bold;font-size: 1.5em">Berita Acara Ujian Tengah Semester(UTS) Semester Genap T.A 2018/2019</P>
                   </div>
                        <div class="col-lg-12" style="height: 300px;margin-bottom: 20px;;margin-top: 20px; border-bottom: 1px solid black;border-left:1px solid black;border-right: 1px solid black;" >
                            <table style="text-align: left;">            
                                <tr>                        
                                    <th>Kode / Nama Matakuliah</th>  
                                    <td>:</td>                    
                                     <td style="width: 200px">{{ $jadwal->kode_mk }}/{{ $jadwal->matakuliah }}</td>        
                                </tr>                       
                                <tr>
                                    <th>Jenis Ujian</th>
                                    <td>:</td>
                                    <td>{{ $jadwal->jenis }}</td>
                                </tr>
                                <tr>
                                    <th>Hari/ Tanggal</th>
                                    <td>:</td>
                                    <td>@php
                                       echo date('d F Y', strtotime($jadwal->tanggal));
                                    @endphp </td>
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
                                <tr>
                                    <th>Nama Pengawas</th>
                                    <td>:</td>
                                    <td>{{ $jadwal->pengawas1 }}/{{ $jadwal->pengawas2 }}</td>
                                </tr>
                                <tr>
                                    <th>Tanda Tangan Pengawas</th>
                                    <td>:</td>
                                    <td>/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</td>
                                </tr>
                                <tr>
                                    <th>Ruangan</th>
                                    <td>:</td>
                                    <td>{{ $jadwal->ruangan }}</td>
                                </tr>
                                <tr>
                                    <th>Supervisi</th>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>Tanda Tangan Supervisi</th>
                                    <td>:</td>
                                    <td></td>
                                </tr>
                            </table> 
                        </div>
                        <div class="col-lg-12" style="">
                            <table>
                                <tr>
                                    <th>Jumlah Examplar</th>
                                    <td>:</td>
                                    <td>______________________ Examplar</td>
                                </tr>
                                <tr>
                                    <th>Jumlah Peserta Ujian</th>
                                    <td>:</td>
                                    <td>______________________ orang</td>
                                </tr>
                            </table>
                        </div>
                        <p style="margin-top: 20px;">Isi Berita</p>
                        <div class="col-lg-12" style="border:1px solid black; height: 400px;s">

                        </div>
                  </div>
              </div>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>