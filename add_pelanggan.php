<?php 
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
                            </div>
                            <div class="card-body">
                                <form action="proses_reservasi.php?aksi=tambahpelanggan" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" placeholder="masukkan nama pelanggan"  required/>
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputjk" type="text" name="jk" placeholder=" jk"  required/>
                                                <label for="inputjk">Jenis Kelamin</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputhp" type="text" name="hp" placeholder=" hp"  required/>
                                                <label for="inputhp">No. Hp</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="email" type="text" name="email" placeholder="email"  required/>
                                                <label for="email">email</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="alamat" type="text" name="alamat" placeholder="alamat"  required/>
                                                <label for="alamat">Alamat</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="simpan" class="btn btn-primary btn-block" onclick="return confirm('Anda yakin ingin menambah data ini?')">Simpan</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="data_pelanggan.php" class="btn btn-secondary" onclick="return confirm('Anda yakin ingin Membatalkan nya?')">Batal</a>
                                            </div>
                                            
                                        </form>
                                

                            </div>
                        </div>
                    </div>
                </main>

<?php
include "footer.php";
?>