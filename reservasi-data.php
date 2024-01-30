<?php
include "database.php";
$database = new Database();
$data_reservasi = $database->Data_reservasi();
include "header.php";

?>

<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Reservasi</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data reservasi
        </div>
    <div class="col-12">
        <!-- <a href="service-add.php" class="btn btn-sm btn-primary m-2">Tambah service</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
              
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Perangkat</th>
                                <th scope="col">Model</th>
                                <th scope="col">Teknisi</th>
                                <th scope="col">No-hp teknisi</th>
                                <th scope="col">status</th>
                                <th scope="col">aksi</th>

                            </tr>
                        </thead>
                                <!-- kode php  -->
                                <?php
                                $no = 1;
                                foreach($data_reservasi as $data){
                                ?>
                        <tbody>
                                        <!-- konten -->
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama']?></td>
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['nama_teknisi']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td><?= $data['status_proses']?></td>
                                <td>
                                <a href="reservasi-edit.php?id_reservasi=<?php echo $data['id_reservasi']; ?>&aksi=edit" class="btn btn-success">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg></i>
                                </a>
                                <a href="proses.php?id_reservasi=<?php echo $data['id_reservasi']; ?>&aksi=hapusservis" class="btn btn-danger"
                                onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6zM19 4h-3.5l-1-1h-5l-1 1H5v2h14z"/></svg></i>
                                </a>
                                </td>
                            </tr>
                            
                        </tbody>
                        
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
    </div>

</div>
<?php
include "footer.php";
?>