<?php
include "database.php";
$database = new Database();
include "header.php";

?>


<div class="container-fluid pt-4 px-4">
<h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Data Pelanggan</a></li>
            <li class="breadcrumb-item"><a href="#">Data Service</a></li>
            <li class="breadcrumb-item active">Tambah Reservasi</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M1.05 20v-1.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T9.05 14q1.925 0 3.525.45t2.875 1.1q.75.375 1.175 1.1t.425 1.55V20q0 .425-.288.713T16.05 21h-14q-.425 0-.712-.288T1.05 20m8-7q-1.65 0-2.825-1.175T5.05 9H4.8q-.225 0-.362-.137T4.3 8.5q0-.225.138-.363T4.8 8h.25q0-1.125.55-2.025T7.05 4.55v.95q0 .225.138.363T7.55 6q.225 0 .363-.137T8.05 5.5V4.15q.225-.075.475-.112T9.05 4q.275 0 .525.038t.475.112V5.5q0 .225.138.363T10.55 6q.225 0 .363-.137t.137-.363v-.95q.9.525 1.45 1.425T13.05 8h.25q.225 0 .363.138t.137.362q0 .225-.137.363T13.3 9h-.25q0 1.65-1.175 2.825T9.05 13m0-2q.825 0 1.413-.587T11.05 9h-4q0 .825.588 1.413T9.05 11m7.425 3.6l-.075-.35q-.15-.05-.287-.112t-.263-.188l-.3.1q-.175.05-.337 0t-.263-.225l-.1-.175q-.1-.15-.062-.325t.162-.3l.25-.225v-.6l-.25-.225q-.125-.125-.162-.3t.062-.325l.1-.175q.1-.175.263-.225t.337 0l.3.1q.1-.1.25-.175t.3-.125l.075-.35q.05-.175.175-.288t.3-.112h.2q.175 0 .3.113t.175.287l.075.35q.15.05.3.125t.25.175l.3-.1q.175-.05.338 0t.262.225l.1.175q.1.15.063.325t-.163.3l-.25.225v.6l.25.225q.125.125.163.3t-.063.325l-.1.175q-.1.175-.262.225t-.338 0l-.3-.1q-.125.125-.262.188t-.288.112l-.075.35q-.05.175-.175.288t-.3.112h-.2q-.175 0-.3-.112t-.175-.288m.575-1.35q.3 0 .525-.225t.225-.525q0-.3-.225-.525t-.525-.225q-.3 0-.525.225t-.225.525q0 .3.225.525t.525.225m1.7-3.8l-.1-.5q-.225-.075-.413-.187T17.9 8.5l-.525.175q-.225.075-.45-.012t-.35-.288l-.15-.25q-.125-.2-.088-.437t.238-.413L17 6.9q-.05-.125-.05-.2v-.4q0-.075.05-.2l-.425-.375q-.2-.175-.238-.413t.088-.437l.15-.25q.125-.2.35-.288t.45-.012l.525.175q.15-.15.338-.262t.412-.188l.1-.5q.05-.25.238-.4t.437-.15h.25q.25 0 .438.15t.237.4l.1.5q.225.075.413.188t.337.262l.525-.175q.225-.075.45.013t.35.287l.15.25q.125.2.088.438t-.238.412L22.1 6.1q.05.125.05.2v.4q0 .075-.05.2l.425.375q.2.175.238.413t-.088.437l-.15.25q-.125.2-.35.288t-.45.012L21.2 8.5q-.15.15-.337.262t-.413.188l-.1.5q-.05.25-.238.4t-.437.15h-.25q-.25 0-.437-.15t-.238-.4m.8-1.7q.525 0 .888-.362T20.8 6.5q0-.525-.363-.888t-.887-.362q-.525 0-.888.363T18.3 6.5q0 .525.363.888t.887.362"/></svg>
                </i>
                Tambah Data Reservasi
        </div>
    <div class="col-12">
        <!-- <a href="pelanggan-add.php" class="btn btn-sm btn-primary m-2">Tambah pelanggan</a> -->
        <div class="bg-light rounded h-100 p-4">
            <div class="table-responsive">
                <form action="proses.php?aksi=tambahreservasi" method="post">
                <table>
                     <!-- nama barang service -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M8 7a4 4 0 1 1 8 0a4 4 0 0 1-8 0m0 6a5 5 0 0 0-5 5a3 3 0 0 0 3 3h12a3 3 0 0 0 3-3a5 5 0 0 0-5-5z" clip-rule="evenodd"/></svg></i>    
                            Nama Pelanggan
                        </label>
                            <select class="form-control" name="id_pelanggan" id="id_pelanggan" required>
                                <!-- <option>Pilih teknisi</option> -->
                                <?php
                                    foreach($data_pelanggan = $database->Data_Pelanggan_cari() as $data){
                                ?>
                                <option value="<?= $data['id_pelanggan']?>"> <?= $data['nama']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56"><path fill="currentColor" d="M46 42h7.5a.5.5 0 0 1 .5.5V44c0 1.105-2.895 2-4 2H6c-1.105 0-4-.895-4-2v-1.5a.5.5 0 0 1 .5-.5H10a4 4 0 0 1-4-4V14a4 4 0 0 1 4-4h36a4 4 0 0 1 4 4v24a4 4 0 0 1-4 4M10 15v22a1 1 0 0 0 1 1h34a1 1 0 0 0 1-1V15a1 1 0 0 0-1-1H11a1 1 0 0 0-1 1m14 26a1 1 0 0 0 0 2h8a1 1 0 0 0 0-2z"/></svg>    
                            Nama Perangkat
                        </label>
                            <select class="form-control" name="id_service" id="id_service" required>
                                <!-- <option>Perangkat</option> -->
                                <?php
                                    foreach($data_service = $database->Data_service_cari() as $data){
                                ?>
                                <option value="<?= $data['id_service']?>"> <?= $data['nama_perangkat']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">
                            <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 15c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4m13.1-8.16c.01-.11.02-.22.02-.34c0-.12-.01-.23-.03-.34l.74-.58c.07-.05.08-.15.04-.22l-.7-1.21c-.04-.08-.14-.1-.21-.08l-.86.35c-.18-.14-.38-.25-.59-.34l-.13-.93A.182.182 0 0 0 20.2 3h-1.4c-.09 0-.16.06-.17.15l-.13.93c-.21.09-.41.21-.59.34l-.87-.35c-.08-.03-.17 0-.21.08l-.7 1.21c-.04.08-.03.17.04.22l.74.58a1.953 1.953 0 0 0 0 .68l-.74.58c-.07.05-.08.15-.04.22l.7 1.21c.04.08.14.1.21.08l.87-.35c.18.14.38.25.59.34l.13.93c.01.09.08.15.17.15h1.4c.09 0 .16-.06.17-.15l.13-.93c.21-.09.41-.21.59-.34l.87.35c.08.03.17 0 .21-.08l.7-1.21c.04-.08.03-.17-.04-.22zm-2.6.91a1.25 1.25 0 1 1 0-2.5a1.25 1.25 0 0 1 0 2.5m.42 3.93l-.5-.87c-.03-.06-.1-.08-.15-.06l-.62.25c-.13-.1-.27-.18-.42-.24l-.09-.66A.15.15 0 0 0 18 10h-1c-.06 0-.11.04-.12.11l-.09.66c-.15.06-.29.15-.42.24l-.62-.25c-.06-.02-.12 0-.15.06l-.5.87c-.03.06-.02.12.03.16l.53.41c-.01.08-.02.16-.02.24c0 .08.01.17.02.24l-.53.41c-.05.04-.06.11-.03.16l.5.87c.03.06.1.08.15.06l.62-.25c.13.1.27.18.42.24l.09.66c.01.07.06.11.12.11h1c.06 0 .12-.04.12-.11l.09-.66c.15-.06.29-.15.42-.24l.62.25c.06.02.12 0 .15-.06l.5-.87c.03-.06.02-.12-.03-.16l-.52-.41c.01-.08.02-.16.02-.24c0-.08-.01-.17-.02-.24l.53-.41c.05-.04.06-.11.04-.17m-2.42 1.65c-.46 0-.83-.38-.83-.83c0-.46.38-.83.83-.83s.83.38.83.83c0 .46-.37.83-.83.83M4.74 9h8.53c.27 0 .49-.22.49-.49v-.02a.49.49 0 0 0-.49-.49H13c0-1.48-.81-2.75-2-3.45v.95c0 .28-.22.5-.5.5s-.5-.22-.5-.5V4.14C9.68 4.06 9.35 4 9 4s-.68.06-1 .14V5.5c0 .28-.22.5-.5.5S7 5.78 7 5.5v-.95C5.81 5.25 5 6.52 5 8h-.26a.49.49 0 0 0-.49.49v.03c0 .26.22.48.49.48M9 13c1.86 0 3.41-1.28 3.86-3H5.14c.45 1.72 2 3 3.86 3"/></svg></i>
                            Teknisi
                        </label>
                            <select class="form-control" name="id_teknisi" id="id_teknisi" required>
                                <?php
                                    foreach($data_teknisi = $database->Data_teknisi() as $data){
                                ?>
                                <option value="<?= $data['id_teknisi']?>"> <?= $data['nama_teknisi']?></option>
                                <?php
                                    }
                                ?>
                            </select>
                    </div>
                         <!-- status service  -->
                        <div class="mb-3">
                            <label for="Dalam anterian" class="form-check-inline">
                                <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 56 56"><path fill="currentColor" d="m50.923 21.002l.046.131l.171.566l.143.508l.061.232l.1.42a23.933 23.933 0 0 1-2.653 17.167a23.932 23.932 0 0 1-13.57 10.89l-.404.12l-.496.128l-.717.17a1.89 1.89 0 0 1-2.288-1.558a2.127 2.127 0 0 1 1.606-2.389l.577-.145c.36-.094.67-.186.929-.273a19.933 19.933 0 0 0 10.899-8.943a19.934 19.934 0 0 0 2.292-13.923l-.069-.313l-.092-.365l-.115-.418l-.138-.47a2.135 2.135 0 0 1 1.26-2.602a1.894 1.894 0 0 1 2.458 1.067M7.385 19.92a2.127 2.127 0 0 1 1.394 2.63c-.18.606-.31 1.11-.39 1.513a19.933 19.933 0 0 0 2.295 13.91a19.934 19.934 0 0 0 10.911 8.947l.306.097l.174.05l.39.106l.694.171a2.135 2.135 0 0 1 1.623 2.393a1.894 1.894 0 0 1-2.152 1.594l-.138-.025l-.576-.135l-.51-.13l-.446-.125l-.2-.06A23.933 23.933 0 0 1 7.22 39.972a23.932 23.932 0 0 1-2.647-17.197l.077-.32l.1-.375l.194-.665l.076-.25a1.89 1.89 0 0 1 2.365-1.246M28.051 12c8.837 0 16 7.163 16 16s-7.163 16-16 16c-8.836 0-16-7.163-16-16s7.164-16 16-16m0 4c-6.627 0-12 5.373-12 12s5.373 12 12 12c6.628 0 12-5.373 12-12s-5.372-12-12-12m0-12a23.932 23.932 0 0 1 16.217 6.306l.239.227l.275.274l.31.322l.346.369a1.89 1.89 0 0 1-.205 2.76a2.127 2.127 0 0 1-2.873-.196c-.217-.23-.419-.435-.605-.617l-.35-.334l-.16-.143A19.933 19.933 0 0 0 28.051 8a19.934 19.934 0 0 0-13.204 4.976l-.114.102l-.253.24l-.287.285l-.495.515c-.76.809-2.014.9-2.883.21a1.894 1.894 0 0 1-.305-2.662l.09-.106l.405-.431l.368-.378c.175-.175.336-.33.484-.465A23.933 23.933 0 0 1 28.05 4"/></svg></i>
                                status service
                            </label>
                                <div class="form-check form-check-inline">                                                  
                                    <input type="radio" name="status_proses" value="Dalam anterian" class="form-check-input" checked>
                                    <label for="status_proses" class="form-check-label">Dalam anterian</label>
                                </div>
                        </div>
                </table>
                    <button type="submit" onclick="return confirm('Anda yakin data yang anda masukan ini benar?')" class="btn btn-primary">simpan</button>
                
                </form>
                </div>
            </div>
    </div>

</div>

<?php
include "footer.php";
?>