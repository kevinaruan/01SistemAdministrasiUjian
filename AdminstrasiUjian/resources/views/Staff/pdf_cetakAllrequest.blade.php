<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <p>Request matakuliah : </p>
    </title>
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <title></title>
    <style>
        @page { size: A4 }
 
        td{
            padding: 20px;
            text-align: left;
        }
        th{
            padding: 10px;
            text-align: left;
        }
        tr{
            font-family: 'Times New Roman', Times, serif; 
            padding: 2px;
            text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
    }
 
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
 
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
 
    </style>
  </head>
  <body class="A4">
      @foreach ($req as $item)
      <div class="container-fluid">
        <div class="row">     
              <div class="col-lg-12" style="text-align: center">
                    <h1>Request Matakuliah:{{ $item->matakuliah }}</h1>  
              </div>
            <div class="col-lg-5" style="margin-left: 5%;margin: 2%;border: 2px solid black; margin-top: 15%;margin-bottom: 200px;">
              <table style="text-align: left;width: 100%; padding: 30px;">  
                  <tr>
                      <th>Nama Dosen</th>
                      <td>:</td>
                      <td>{{ $item->nama_dosen }}</td>
                  </tr>          
                  <tr>                        
                      <th>Kode MK</th>  
                      <td>:</td>                    
                       <td style="width: 200px;">{{ $item->kode_mk }}</td>        
                  </tr>
                  <tr>
                      <th>Nama Matakuliah</th>
                      <td>:</td>
                      <td>{{ $item->matakuliah }}</td>
                  </tr>                       
                  <tr>
                      <th>Durasi</th>
                      <td>:</td>
                      <td>{{ $item->durasi }}</td>
                  </tr>
                  <tr>
                      <th>Jenis Ujian</th>
                      <td>:</td>
                      <td>{{ $item->jenis_ujian }}</td>
                  </tr>
                  <tr>
                      <th>Ruangan</th>
                      <td>:</td>
                      <td>{{ $item->ruangan }}</td>
                  </tr>
                  <tr>
                      <th>E-course</th>
                      <td>:</td>
                      <td>{{ $item->ecourse }}</td>
                  </tr>
                  <tr>
                      <th>Catatan</th>
                      <td>:</td>
                      <td>{{ $item->catatan }}</td>
                  </tr>
                  <tr>
                      <th>Jumlah Mahasiswa</th>
                      <td>:</td>
                      <td>{{ $item->jlh_mahasiswa }}</td>
                  </tr>
              </table>
          </div>  
        </div>
    </div>
      @endforeach
      
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>