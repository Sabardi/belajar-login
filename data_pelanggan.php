<?php 
include 'database.php';
$db = new Database();
$data_pelanggan = $db->tampilPelanggan();
include "atas-samping.php"

?>



            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Data Pelanggan</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <a href="add_pelanggan.php" class="btn btn-primary ">Tambah Data</a>
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>No. Hp</th>
                                            <th>Email</th>
                                            <th>Alamatl</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                            <?php
                                                $no = 1;
                                                foreach($data_pelanggan as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_pelanggan']; ?></td>
                                                <td><?php echo $row['jk']; ?></td>
                                                <td><?php echo $row['hp']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['alamat']; ?></td>


                                                
                                                <td>
                                                        <a href="edit_pelanggan.php?id=<?php echo $row['id_pelanggan']; ?>&aksi=updatePelanggan" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="proses_reservasi.php?id=<?php echo $row['id_pelanggan']; ?>&aksi=hapusPelanggan" class="btn btn-danger btn-sm"
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