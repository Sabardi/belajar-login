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
                            <form action="proses_reservasi.php?aksi=tambah" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputname" type="text" name="nama_pelanggan" placeholder="masukkan nama pelanggan"  required/>
                                                <label for="inputname">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputkeluhan" type="text" name="keluhan" placeholder=" keluhan"  required/>
                                                <label for="inputkeluhan">Keluhan</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <!-- <input class="form-control" id="status" type="text" name="status" placeholder="status"  required/> -->
                                                <select name="status" id="status" class="form-select required">
                                                            <option value="" disabled selected>Pilih status</option>
                                                            <option value="menunggu konfirmasi">Menunggu konfirmasi</option>
                                                            <option value="dikonfirmasi">Dikonfirmasi</option>
                                                            <option value="selesai">Selesai</option>
                                                    </select>
                                                <label for="status">Status</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="tanggal" type="datetime-local" name="tanggal" placeholder="tanggal"  required/>
                                                <label for="tanggal">Tanggal</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="simpan" class="btn btn-primary btn-block">Simpan</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="index-admin.php" class="btn btn-secondary">Batal</a>
                                            </div>
                                            
                                        </form>
                                

                            </div>
                        </div>
                    </div>
                </main>

<?php
include "footer.php";
?>