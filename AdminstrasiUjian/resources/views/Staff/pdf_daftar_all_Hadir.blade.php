<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

    <title></title>
    <style>
        @page { size: A4 }
 
        td{
            padding: 5px;
            text-align: left;
        }
        th{
            padding: 5px;
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
      <div class="container-fluid">
          
          @foreach ($prodi->matakuliah as $MK)
            <div style="background: red;">{{ $MK->kode_mk }}</div>|
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align: center;width: 10px;">NO.</th>
                            <th style="width: 80px;">NIM</th>
                            <th>kode mk</th>
                            <th>Nama Mahasiswa</th>
                            <th>Tanda Tangan</th>                                    </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($daftar as $p =>$values)
                        @if ($values == $MK->kode_mk)
                        <tr>
                            <td>{{ $i++ }}</td>
                            {{-- <td>{{$values->nim_mahasiswa}}</td> --}}
                            <td>{{$values->nim_mahasiswa }}</td>
                            {{-- <td>{{$p->nama_mahasiswa}}</td>/ --}}
                            <td></td>
                        </tr>
                        
                        @else
                            <div>kontol</div>
                        @endif
                        @endforeach    
                        
                    </tbody>
                </table>
            </div>
          @endforeach     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>