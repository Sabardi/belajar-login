<?php 
include'database.php';
$db = new Database();
$data_reservasi = $db->tampilReservasi();
include "atas-samping.php"

?>



            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Reservasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Reservasi</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <a href="add-reserv.php" class="btn btn-primary ">Tambah Data</a>
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keluhan</th>
                                            <th>Teknisi</th>
                                            <th>status</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                            <?php
                                                $no = 1;
                                                foreach($data_reservasi as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['id_pelanggan']; ?></td>
                                                <td><?php echo $row['keluhan']; ?></td>
                                                <td><?php echo $row['id_teknisi']; ?></td>
                                                <td>
                                                    <span style="background-color: <?php echo ($row['status'] == 'menunggu konfirmasi') ? 'var(--bs-danger)' : (($row['status'] == 'dikonfirmasi') ? 'var(--bs-warning)' : 'var(--bs-success)'); ?>; color: white; border-radius: 4px; padding: 4px; font-weight: bold;">
                                                        <?php echo $row['status']; ?>
                                                    </span>
                                                </td>
                                                <td><?php echo $row['tanggal']; ?></td>

                                                
                                                <td>
                                                        <a href="edit_reservasi.php?id=<?php echo $row['id']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="proses_reservasi.php?id=<?php echo $row['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
                                            </tr>
                                            <?php
                                                }
                                                ?>
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
<?php
include "footer.php"
?>