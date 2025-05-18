<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
    <h2><a href="https://www.usm.ac.id">www.usm.ac.id</a></h2>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah">+ Tambah Pegawai Baru</a>
    <br>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @foreach ($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                |
                <a href="/pegawai/delete/{{ $p->pegawai_id }}" >Hapus</a>
            </td>
        </tr>
        @endforeach
</body>
</html>