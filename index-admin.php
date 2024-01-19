<?php
include "database.php";
$data_transaksi = $database->Data_transaksi();
$data_service = $database->Data_Service();
include "sidebar.php";
include "navbar.php";
?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Data terbaru</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">No</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">nomer telpon</th>
                                    <!-- tabel pelanggan end  -->

                                    <!-- tabel service start -->
                                    <th scope="col">Perangkat</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Tanggal masuk</th>
                                    <!-- <th scope="col">deskripsi</th> -->
                                    <!-- end  -->

                                    <!-- tabel teknisi start -->
                                    <th scope="col">Teknisi</th>
                                    <!-- end  -->

                                    <th scope="col">status pembayaran</th>
                                    <!-- <th>total biaya</th> -->

                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <!-- kode php  -->
                            <?php
                                $no = 1;
                                foreach($data_transaksi as $data){

                                ?>
                            <tbody>
                            <!-- kontent     -->
                            <tr>
                                <td><?= $no++?></td>
                                <!-- tabel pelanggan  -->
                                <td><?= $data['nama']?></td>
                                <td><?= $data['no_hp']?></td>
                                <!-- end  -->

                                <!-- tabel service start -->
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <!-- end  -->

                                <!-- table teknisi start  -->
                                <td><?= $data['nama_teknisi']?></td>

                                <td><?= $data['status_transaksi']?></td>                        
                                <td><a class="btn btn-sm btn-primary" href="">show</a></td>
                            </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


        
<?php
include "footer.php";
?>