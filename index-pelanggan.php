<?php

include "database.php";
$database = new database();
$data_transaksi = $database->Data_transaksi_sukses();
include "header-pelanggan.php";
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Transaksi</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable transaksi
        </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>Perangkat</th>
                            <th>status</th>
                            <th>Tanggal Masuk</th>
                            <th>Total Biaya</th>
                            <th>tanggal transaksi</th>
                        </tr>
                    </thead>
                      <!-- kode php  -->
                      <?php
                                $no = 1;
                                foreach($data_transaksi as $data){
                                ?>
                    <tbody>
                        
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['status_proses']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <td><?= $data['total_biaya']?></td>
                                <td><?= $data['tanggal_transaksi']?></td>
                            </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php
include "footer-pelanggan.php";
?>