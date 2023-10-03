<?php
include '../classes/database.php';
$db=new database();
?>

<h3>Edit Data Dosen</h3>
<form action="proses_dsn.php?aksi=update" method="post">
<?php
foreach($db->edit_dosen($_GET['id']) as $d){

    ?>
    <table>
        <tr>
            <td>NIDN</td>
            <td>
                <input type="hidden" name="id_dosen" value="<?php echo $d['id_dosen']?>">
                <input type="text" name="nidn" value="<?php echo $d['nidn']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat_dosen" cols="30" rows="5" value="<?php echo $d['alamat_dosen']?>"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>