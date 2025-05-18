<!DOCTYPE html>
<html>
    <head>
        <title>Tutorial Membuat CRUD Pada Laravel - www.usm.ac.id</title>
    </head>
    <body>

        <h2><a href="https://www.usm.ac.id">www.usm.ac.id</a></h2>
        <h3>Data Pegawai</h3>

        <a href="/pegawai">Kembali</a>

        <br>
        <br>

        @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required="required" value="{{ $p->pegawai_nama }}"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur" required="required" value="{{ $p->pegawai_umur }}"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data"></td>
                </tr>
            </table>
        </form>
        @endforeach
    </body>
</html>