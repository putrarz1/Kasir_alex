<?php
$id = $_GET ["id"];

if (isset($_POST['Namapelanggan'])) { 
    $nama = $_POST['Namapelanggan'];
    $alamat = $_POST['Alamat'];
    $no_telepon = $_POST['Nohp'];

    // Corrected the query
    $query = mysqli_query($koneksi, "UPDATE pelanggan set Namapelanggan='$nama', Alamat='$alamat', Nohp='$no_telepon' WHERE IDpelanggan='$id'");

    if ($query) {
        echo '<script>alert("Ubah data berhasil")</script>';
    } else {
        echo '<script>alert("Ubah data gagal")</script>';
    }
}
$query = mysqli_query($koneksi,"SELECT*FROM pelanggan WHERE IDpelanggan = $id");
$data = mysqli_fetch_array($query);
?>
<div class="container-fluid">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <a href="?page=pelanggan" class="btn btn-danger">Kembali</a>
    <hr>

    <form method="post">
        <table class="table table-bordered">
            <tr>
                <td width="200">Nama Pelanggan</td>
                <td width="1">:</td>
                <td><input class="form-control" value="<?php echo $data['Namapelanggan']; ?>" type="text" name="Namapelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="Alamat" rows="5" class="form-control"  value="<?php echo $data['Alamat']; ?>" ></textarea></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input class="form-control"  value="<?php echo $data['Nohp']; ?> "type="number" step="1" name="Nohp"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </td>
            </tr>
        </table>
    </form>
</div>