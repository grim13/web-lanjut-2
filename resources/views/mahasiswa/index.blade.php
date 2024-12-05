<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
                <th>Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhs as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->tahun_masuk }}</td>
                <td>{{ $item->prodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>