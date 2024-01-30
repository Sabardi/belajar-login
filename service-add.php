<?php
include "database.php";
$database = new Database();
$data_pelanggan = $database->Data_perangkat();
include "header.php";

?>
<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="service-add.php" onclick="return confirm('Data wajib di isi')">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="service-add.php" onclick="return confirm('Data wajib di isi')">Data Pelanggan</a></li>
            <li class="breadcrumb-item"><a href="service-add.php" onclick="return confirm('Data wajib di isi')">Data Service</a></li>
            <li class="breadcrumb-item active">Tambah Data service</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M1.05 20v-1.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T9.05 14q1.925 0 3.525.45t2.875 1.1q.75.375 1.175 1.1t.425 1.55V20q0 .425-.288.713T16.05 21h-14q-.425 0-.712-.288T1.05 20m8-7q-1.65 0-2.825-1.175T5.05 9H4.8q-.225 0-.362-.137T4.3 8.5q0-.225.138-.363T4.8 8h.25q0-1.125.55-2.025T7.05 4.55v.95q0 .225.138.363T7.55 6q.225 0 .363-.137T8.05 5.5V4.15q.225-.075.475-.112T9.05 4q.275 0 .525.038t.475.112V5.5q0 .225.138.363T10.55 6q.225 0 .363-.137t.137-.363v-.95q.9.525 1.45 1.425T13.05 8h.25q.225 0 .363.138t.137.362q0 .225-.137.363T13.3 9h-.25q0 1.65-1.175 2.825T9.05 13m0-2q.825 0 1.413-.587T11.05 9h-4q0 .825.588 1.413T9.05 11m7.425 3.6l-.075-.35q-.15-.05-.287-.112t-.263-.188l-.3.1q-.175.05-.337 0t-.263-.225l-.1-.175q-.1-.15-.062-.325t.162-.3l.25-.225v-.6l-.25-.225q-.125-.125-.162-.3t.062-.325l.1-.175q.1-.175.263-.225t.337 0l.3.1q.1-.1.25-.175t.3-.125l.075-.35q.05-.175.175-.288t.3-.112h.2q.175 0 .3.113t.175.287l.075.35q.15.05.3.125t.25.175l.3-.1q.175-.05.338 0t.262.225l.1.175q.1.15.063.325t-.163.3l-.25.225v.6l.25.225q.125.125.163.3t-.063.325l-.1.175q-.1.175-.262.225t-.338 0l-.3-.1q-.125.125-.262.188t-.288.112l-.075.35q-.05.175-.175.288t-.3.112h-.2q-.175 0-.3-.112t-.175-.288m.575-1.35q.3 0 .525-.225t.225-.525q0-.3-.225-.525t-.525-.225q-.3 0-.525.225t-.225.525q0 .3.225.525t.525.225m1.7-3.8l-.1-.5q-.225-.075-.413-.187T17.9 8.5l-.525.175q-.225.075-.45-.012t-.35-.288l-.15-.25q-.125-.2-.088-.437t.238-.413L17 6.9q-.05-.125-.05-.2v-.4q0-.075.05-.2l-.425-.375q-.2-.175-.238-.413t.088-.437l.15-.25q.125-.2.35-.288t.45-.012l.525.175q.15-.15.338-.262t.412-.188l.1-.5q.05-.25.238-.4t.437-.15h.25q.25 0 .438.15t.237.4l.1.5q.225.075.413.188t.337.262l.525-.175q.225-.075.45.013t.35.287l.15.25q.125.2.088.438t-.238.412L22.1 6.1q.05.125.05.2v.4q0 .075-.05.2l.425.375q.2.175.238.413t-.088.437l-.15.25q-.125.2-.35.288t-.45.012L21.2 8.5q-.15.15-.337.262t-.413.188l-.1.5q-.05.25-.238.4t-.437.15h-.25q-.25 0-.437-.15t-.238-.4m.8-1.7q.525 0 .888-.362T20.8 6.5q0-.525-.363-.888t-.887-.362q-.525 0-.888.363T18.3 6.5q0 .525.363.888t.887.362"/></svg>
                </i>
                Tambah Data Service
        </div>
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=tambahtservis" method="post">
                <table>
                <div class="mb-3">
                    
                     <!-- nama perangkat -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd"/></svg></i>    
                            Nama
                        </label>
                        <select class="form-control" name="id_pelanggan" id="id_pelanggan" required>
                            <!-- <option value="">Pilih Pelanggan</option> -->
                            <?php
                                foreach($database = $database->Data_Pelanggan_cari() as $data){
                            ?>
                            <option value="<?= $data['id_pelanggan']?>"> <?= $data['nama']?></option>
                            <?php
                                }
                            ?>
                            </select>
                      
                    </div>
                  
                    <!-- nama perangkat -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56"><path fill="currentColor" d="M46 42h7.5a.5.5 0 0 1 .5.5V44c0 1.105-2.895 2-4 2H6c-1.105 0-4-.895-4-2v-1.5a.5.5 0 0 1 .5-.5H10a4 4 0 0 1-4-4V14a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v24a4 4 0 0 1-4 4M10 15v22a1 1 0 0 0 1 1h34a1 1 0 0 0 1-1V15a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1m14 26a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2z"/></svg>
                            Nama Perangkat
                        </label>
                        <select class="form-select" name="nama_perangkat" id="nama_perangkat">
                            <option value="komputer">komputer</option>
                            <option value="laptop">laptop</option>
                            <option value="printer">printer</option>
                            <option value="lcd">lcd</option>
                        </select>
                    </div>
                   

                    <!-- model -->
                    <div class="mb-3">
                        <label for="model" class="form-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56"><path fill="currentColor" d="M46 42h7.5a.5.5 0 0 1 .5.5V44c0 1.105-2.895 2-4 2H6c-1.105 0-4-.895-4-2v-1.5a.5.5 0 0 1 .5-.5H10a4 4 0 0 1-4-4V14a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v24a4 4 0 0 1-4 4M10 15v22a1 1 0 0 0 1 1h34a1 1 0 0 0 1-1V15a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1m14 26a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2z"/></svg>
                            Model
                        </label>
    
                        <input type="text" class="form-control" name="model" id="model">
                    </div>

                    <!-- tanggal masuk -->
                    <div class="mb-3">
                        <label for="tanggal_masuk" class="form-label">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M22 2.25h-3.25V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25h-4.5V.75a.75.75 0 0 0-1.5-.001V2.25H2a2 2 0 0 0-2 1.999v17.75a2 2 0 0 0 2 2h20a2 2 0 0 0 2-2V4.249a2 2 0 0 0-2-1.999M22.5 22a.5.5 0 0 1-.499.5H2a.5.5 0 0 1-.5-.5V4.25a.5.5 0 0 1 .5-.499h3.25v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751h4.5v1.5a.75.75 0 0 0 1.5.001V3.751H22a.5.5 0 0 1 .499.499z"/><path fill="currentColor" d="M5.25 9h3v2.25h-3zm0 3.75h3V15h-3zm0 3.75h3v2.25h-3zm5.25 0h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3zm5.25 7.5h3v2.25h-3zm0-3.75h3V15h-3zm0-3.75h3v2.25h-3z"/></svg></i>
                                Tanggal Masuk
                            </label>

                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control">
                    </div>

                    <!-- deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="currentColor" d="M3.5 2A2.5 2.5 0 0 0 1 4.5v7A2.5 2.5 0 0 0 3.5 14h9a2.5 2.5 0 0 0 2.5-2.5v-7A2.5 2.5 0 0 0 12.5 2zM7 11h.5V5H5v.5a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V5H8.5v6H9a.5.5 0 0 1 0 1H7a.5.5 0 0 1 0-1"/></svg></i>
                            Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
                    </div>

                </table>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
                </div>
            </div>
    </div>

</div>

<?php
include "footer.php";
?>