<div class="px-3">
    <h4 class=""><b>Tabel DTS VSGA 2021</b></h4>
    <p class="">Tampil Data dari Database</p>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Nomer Telpon</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM diri";
            $hasil = mysqli_query($conn, $sql);
            $nomer = 1;
            while ($data = mysqli_fetch_array($hasil, MYSQLI_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo $nomer++; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['lahir']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['telpon']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['kelamin']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="index.php?page=edit&id=<?php echo $data['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>