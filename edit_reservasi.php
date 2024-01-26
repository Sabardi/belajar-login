<?php 
include'database.php';
$db = new Database();
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
                                    <!-- Tambah Data
                                </button> -->
                                <p><h5>Edit data reservasi</h5></p>

                            </div>
                            <div class="card-body">
                            <form action="proses_reservasi.php?aksi=update" method="post">
                                                <?php
                                                foreach($db->editReservasi($_GET['id']) as $data){
                                                ?>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputid" type="hidden" name="id" value="<?php echo $data['id'] ?>"  />
                                                <label for="inputname">Id Pelanggan</label>
                                            </div>       
                                            
                                            <div class="form-floating mb-3">
    <select class="form-select" name="id_pelanggan" id="id_pelanggan">
        <option>pilih Pelanggan</option>
        <?php
        foreach ($data_pelanggan as $data_pel) {
            $selected = ($data_pelanggan == $data_pel['id_pelanggan']) ? 'selected' : '';
        ?>
            <option value='<?php echo $data_pel['id_pelanggan'] ?>' <?php echo $selected; ?>>
                <?php echo $data_pel['nama_pelanggan']; ?>
            </option>
        <?php
        }
        ?>
    </select>
    <label for="inputname" class="form-label">Nama Pelanggan</label>
</div>



                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="id_pelanggan" type="text" name="id_pelanggan" value="<?php echo $data['id_pelanggan'] ?>"  />
                                                <label for="id_pelanggan">Nama Pelanggan</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputkeluhan" type="text" name="keluhan" value="<?php echo $data['keluhan'] ?>"  />
                                                <label for="inputkeluhan">Keluhan</label>
                                            </div>

                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="id_teknisi" type="text" name="id_teknisi" value="<?php echo $data['id_pelanggan'] ?>"  />
                                                <label for="id_teknisi">Nama teknisi</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                    <?php $status = $data['status']; ?>

                                                <!-- <input class="form-control" id="status" type="text" name="status" placeholder="status"  required/> -->
                                                <select name="status" id="status" class="form-select required">
                                                            <!-- <option value="" disabled selected>Pilih status</option> -->
                                                            <option <?php echo ($status == 'menunggu konfirmasi') ? "selected": "" ?>>Menunggu konfirmasi</option>
                                                            <option <?php echo ($status == 'dikonfirmasi') ? "selected": "" ?>>Dikonfirmasi</option>
                                                            <option <?php echo ($status == 'selesai') ? "selected": "" ?>>Selesai</option>
                                                    </select>
                                                <label for="status">Status</label>
                                            </div>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="tanggal" type="datetime-local" name="tanggal" value="<?php echo $data['tanggal'] ?>"  />
                                                <label for="tanggal">Tanggal</label>
                                            </div>                                           
                                            <div class="mt-4 mb-0">
                                            <div >
                                                <button type="submit" name="ubah" class="btn btn-primary btn-block">Ubah</button>
                                                <!-- <button type="reset" name="batal" class="btn btn-secondary btn-block">Batal</button></div> -->
		                                    	<a href="reservasi.php" class="btn btn-secondary">Batal</a>
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