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

        <form action="/pegawai/store" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" required="required"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text" name="jabatan" required="required"></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="text" name="umur" required="required"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" required="required"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan Data"></td>
                </tr>
            </table>
        </form>
    </body>
</html>