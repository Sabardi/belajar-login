<?php 
include'database.php';
$db = new Database();
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
                                    <!-- Tambah Data
                                </button> -->
                                <p><h5>Edit data pelanggan</h5></p>

                            </div>
                            <div class="card-body">
                            <form action="proses_reservasi.php?aksi=updatePelanggan" method="post">
                                                <?php
                                                foreach($db->editPelanggan($_GET['id']) as $data){
                                                ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputid" type="hidden" name="id" value="<?php echo $data['id'] ?>"  />
                                                <label for="inputname">Id Pelanggan</label>
                                            </div>                                           
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" value="<?php echo $data['nama_pelanggan'] ?>"  />
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputjk" type="text" name="jk" value="<?php echo $data['jk'] ?>"  />
                                                <label for="inputjk">Jenis Kelamin</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="hp" type="text" name="hp" value="<?php echo $data['hp'] ?>"  />
                                                <label for="hp">No. Hp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="text" name="email" value="<?php echo $data['email'] ?>"  />
                                                <label for="email">email</label>
                                            </div>          
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="alamat" type="text" name="alamat" value="<?php echo $data['alamat'] ?>"  />
                                                <label for="alamat">Alamat</label>
                                            </div>                                   
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="data_pelanggan.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                                <?php
                                                }
                                                ?>
                                            
                                        </form>      
                        </div>
                        </div>
                    </div>
                </main>

                <?php
include "footer.php";
?>