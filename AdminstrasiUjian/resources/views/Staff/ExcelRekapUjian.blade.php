<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table style="font-family: Segoe UI">
        <thead>
            <tr class="table100-head" style="background: gray;font-weight: bold;">
                <th class="column">Tanggal </th>
                <th class="column">Kode MK</th>
                <th class="column">Nama Matakuliah</th>
                <th class="column">Jenis Ujian</th>
                <th class="column">Pengawas1</th>
                <th class="column">Pengawas2</th>
                <th class="column">Ruangan</th>
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
            </tr> 
            @endforeach
                
                
        </tbody>
    </table>                                    
</body>
</html>
