<?php
include "database.php";
$database = new Database();
$data_teknisi = $database->Data_teknisi();

include "header.php";
?>
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">tambah data</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Silahka input data dengan benar
            </div>

            <div class="card-body">
               <!-- konten -->
               <form action="proses.php?aksi=tambah_data_pelanggan_service" method="post">
                    <table>
                        <div class="card-header">
                            <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                            </i>
                            Data pelanggan
                        </div>
                        <!-- nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
        
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>

                        <!-- jenis kelamin  -->
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-check-inline">Jenis kelamin</label>
                                <div class="form-check form-check-inline">                                                  
                                    <input type="radio" name="jenis_kelamin" value="Laki-laki" class="form-check-input" checked>
                                    <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                                </div>

                                <div class="form-check form-check-inline">  
                                    <input type="radio" name="jenis_kelamin" value="Perempuan" class="form-check-input">
                                    <label for="Jenis_kelamin" class="form-check-label">Perempuan</label>
                                </div>
                        </div>

                        <!-- alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>

                        <!-- nomer telpon  -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No telpon</label>
                
                            <input type="text" name="no_hp" id="no_hp" class="form-control">
                        </div>

                        <!-- email  -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                    
                            <input type="text" name="email" id="email" class="form-control" aria-describedby="emailHelp">
                    
                        </div>

                        <div class="card-header">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M4 6h16v10H4z" opacity=".3"/><path fill="currentColor" d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2zM4 6h16v10H4z"/></svg>
                            </i>
                            Data perangkat
                        </div>

                        <!-- nama perangkat -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Perangkat</label>
                            <select class="form-select" name="nama_perangkat" id="nama_perangkat">
                                <option value="komputer">komputer</option>
                                <option value="laptop">laptop</option>
                            </select>
                        </div>

                        <!-- model -->
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" name="model" id="model">
                        </div>

                        <!-- tanggal masuk -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Tanggal Masuk</label>

                            <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
                        </div>

                        <!-- deskripsi -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                        </div>

                        <!-- <div class="card-header">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M8 21v-2H2V3h20v5h-2V5H4v12h16v-5h-7.2l1.85 1.85l-1.4 1.4L9 11l4.25-4.25l1.4 1.4L12.8 10H22v9h-6v2zm5-10"/></svg>
                            </i>
                            status reservasi
                        </div> -->
                        <!-- teknisi -->
                       <!-- <div class="mb-3">
                           <label for="id_teknisi" class="form-label">Nama Teknisi</label>
                           <select class="form-select" name="id_teknisi" id="id_teknisi  ">
                               <option value="">pilih teknisi</option>
                               <option value="">Belom di tentukan</option>
                               <?php
                            //    foreach($data_teknisi as $data){
                               ?>
                               <option value="<?php
                                // $data['id_teknisi']
                               ?>">
                               <?php
                                //  echo $data['nama_teknisi'] 
                               ?></option>
                               <?php
                            // }
                           ?>
                           </select>
                       </div> -->
                               <!-- status service  -->
                        <!-- <div class="mb-3">
                            <label for="Dalam anterian" class="form-check-inline">status service</label>
                                <div class="form-check form-check-inline">                                                  
                                    <input type="radio" name="status_proses" value="Dalam anterian" class="form-check-input" checked>
                                    <label for="jenis_kelamin_l" class="form-check-label">Dalam anterian</label>
                                </div>
                        </div> -->

                    </table>
                    <button type="submit" onclick="return confirm('Anda yakin data yang anda masukan ini benar?')" class="btn btn-primary">simpan</button>
                </form>
        
            </div>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>
