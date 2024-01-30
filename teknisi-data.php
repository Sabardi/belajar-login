<?php
include "database.php";
$database = new Database();
$data_service = $database->Data_teknisi();
include "header.php";
?>
<div class="container-fluid pt-4 px-4">
    <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Teknisi</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M1.05 20v-1.8q0-.825.425-1.55t1.175-1.1q1.275-.65 2.875-1.1T9.05 14q1.925 0 3.525.45t2.875 1.1q.75.375 1.175 1.1t.425 1.55V20q0 .425-.288.713T16.05 21h-14q-.425 0-.712-.288T1.05 20m8-7q-1.65 0-2.825-1.175T5.05 9H4.8q-.225 0-.362-.137T4.3 8.5q0-.225.138-.363T4.8 8h.25q0-1.125.55-2.025T7.05 4.55v.95q0 .225.138.363T7.55 6q.225 0 .363-.137T8.05 5.5V4.15q.225-.075.475-.112T9.05 4q.275 0 .525.038t.475.112V5.5q0 .225.138.363T10.55 6q.225 0 .363-.137t.137-.363v-.95q.9.525 1.45 1.425T13.05 8h.25q.225 0 .363.138t.137.362q0 .225-.137.363T13.3 9h-.25q0 1.65-1.175 2.825T9.05 13m0-2q.825 0 1.413-.587T11.05 9h-4q0 .825.588 1.413T9.05 11m7.425 3.6l-.075-.35q-.15-.05-.287-.112t-.263-.188l-.3.1q-.175.05-.337 0t-.263-.225l-.1-.175q-.1-.15-.062-.325t.162-.3l.25-.225v-.6l-.25-.225q-.125-.125-.162-.3t.062-.325l.1-.175q.1-.175.263-.225t.337 0l.3.1q.1-.1.25-.175t.3-.125l.075-.35q.05-.175.175-.288t.3-.112h.2q.175 0 .3.113t.175.287l.075.35q.15.05.3.125t.25.175l.3-.1q.175-.05.338 0t.262.225l.1.175q.1.15.063.325t-.163.3l-.25.225v.6l.25.225q.125.125.163.3t-.063.325l-.1.175q-.1.175-.262.225t-.338 0l-.3-.1q-.125.125-.262.188t-.288.112l-.075.35q-.05.175-.175.288t-.3.112h-.2q-.175 0-.3-.112t-.175-.288m.575-1.35q.3 0 .525-.225t.225-.525q0-.3-.225-.525t-.525-.225q-.3 0-.525.225t-.225.525q0 .3.225.525t.525.225m1.7-3.8l-.1-.5q-.225-.075-.413-.187T17.9 8.5l-.525.175q-.225.075-.45-.012t-.35-.288l-.15-.25q-.125-.2-.088-.437t.238-.413L17 6.9q-.05-.125-.05-.2v-.4q0-.075.05-.2l-.425-.375q-.2-.175-.238-.413t.088-.437l.15-.25q.125-.2.35-.288t.45-.012l.525.175q.15-.15.338-.262t.412-.188l.1-.5q.05-.25.238-.4t.437-.15h.25q.25 0 .438.15t.237.4l.1.5q.225.075.413.188t.337.262l.525-.175q.225-.075.45.013t.35.287l.15.25q.125.2.088.438t-.238.412L22.1 6.1q.05.125.05.2v.4q0 .075-.05.2l.425.375q.2.175.238.413t-.088.437l-.15.25q-.125.2-.35.288t-.45.012L21.2 8.5q-.15.15-.337.262t-.413.188l-.1.5q-.05.25-.238.4t-.437.15h-.25q-.25 0-.437-.15t-.238-.4m.8-1.7q.525 0 .888-.362T20.8 6.5q0-.525-.363-.888t-.887-.362q-.525 0-.888.363T18.3 6.5q0 .525.363.888t.887.362"/></svg>
                </i>
                Data Teknisi
        </div>
    <div class="col-12">
        <a href="teknisi-add.php" class="btn btn-sm btn-primary m-2">
                <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M14.5 9c.138 0 .274.005.41.015c.058-.16.09-.334.09-.515v-4A1.5 1.5 0 0 0 13.5 3h-3v-.5A.48.48 0 0 0 10 2c-.276 0-.5.23-.5.5V3h-3A1.5 1.5 0 0 0 5 4.5v4A1.5 1.5 0 0 0 6.5 10h4.837c.895-.63 1.986-1 3.163-1M7 6.5a1 1 0 1 1 2 0a1 1 0 0 1-2 0m4 0a1 1 0 1 1 2 0a1 1 0 0 1-2 0m-2 8c0-1.105.326-2.135.887-2.997H5.31a1.81 1.81 0 0 0-1.809 1.81v.689h.005c.034.78.248 1.757 1.123 2.555C5.584 17.43 7.234 18 10 18c.086 0 .172 0 .256-.002A5.477 5.477 0 0 1 9 14.5m10 0a4.5 4.5 0 1 1-9 0a4.5 4.5 0 0 1 9 0m-4-2a.5.5 0 0 0-1 0V14h-1.5a.5.5 0 0 0 0 1H14v1.5a.5.5 0 0 0 1 0V15h1.5a.5.5 0 0 0 0-1H15z"/></svg></i>
            Tambah Teknisi
        </a>
        <div class="bg-light rounded h-100 p-4">

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                                            
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Spesialis</th>
                                <th scope="col">No-Hp</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        
                        </thead>
                        <?php
                        $no = 1;
                        foreach($data_service as $data){

                        ?>
                        <tbody>
                        
                            <tr>
                                <td><?= $no++?></td>
                                <td><?= $data['nama_teknisi']?></td>
                                <td><?= $data['Jenis_kelamin']?></td>
                                <td><?= $data['alamat']?></td>
                                <td><?= $data['spesialis']?></td>
                                <td><?= $data['no_hp']?></td>
                                <td>
                                    <a href="teknisi-edit.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=edit" class="btn btn-success">
                                        <i><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M7 7H6a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1"/><path d="M20.385 6.585a2.1 2.1 0 0 0-2.97-2.97L9 12v3h3zM16 5l3 3"/></g></svg></i>
                                    </a>
                                    
                                    <a href="proses.php?id_teknisi=<?= $data['id_teknisi']; ?>&aksi=hapusteknisi"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">
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