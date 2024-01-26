<?php 
include'database.php';
$db = new Database();
$data_teknisi= $db->tampilTeknisi();
include "atas-samping.php"

?>



            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Teknisi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Daftar Teknisi</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <!-- <a href="add_pelanggan.php" class="btn btn-primary ">Tambah Data</a> -->
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Teknisi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                            <?php
                                                $no = 1;
                                                foreach($data_teknisi as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_teknisi']; ?></td>
                                                                                            
                                                <td>
                                                        <!-- <a href="edit_pelanggan.php?id=<?php echo $row['id_teknisi']; ?>&aksi=updatePelanggan" class="btn btn-warning btn-sm">Edit</a> -->
                                                        <a href="proses_reservasi.php?id=<?php echo $row['id_teknisi']; ?>&aksi=hapusPelanggan" class="btn btn-danger btn-sm"
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