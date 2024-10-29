<div class="container-fluid px-4">
    <h1 class="mt-4">Pelanggan</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pelanggan</li>
    </ol>
    <a href="?page=pelanggan_tambah" class="btn btn-primary">+ Tambah</a>
    <hr>
    <table class="table table border">
        <tr>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No Telephone</th>
            <th>Aksi</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM pelanggan");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['Namapelanggan']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Nohp']; ?></td>
                <td>
                    <a href="?page=pelanggan_ubah&&id=<?php echo $data['IDpelanggan']; ?>" class="btn btn-secondary">Ubah</a>
                    <a href="?page=pelanggan_hapus&&id=<?php echo $data['IDpelanggan']; ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</div>