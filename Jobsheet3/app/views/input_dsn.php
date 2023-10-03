<h3>Tambah Data Dosen</h3>
<form action="proses_dsn.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIDN</td>
            <td><input type="text" name="nidn"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_dosen"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat_dosen" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>