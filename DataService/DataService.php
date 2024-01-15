<?php
include "../database/database.php";
$database = new Database();
$data_transaksi = $database->Data_transaksi();
$data_service = $database->Data_Service();
?>


 <!-- Google Web Fonts -->
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link href="../asset/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../asset/css/style.css" rel="stylesheet">


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../asset/lib/chart/chart.min.js"></script>
    <script src="../asset/lib/easing/easing.min.js"></script>
    <script src="../asset/lib/waypoints/waypoints.min.js"></script>
    <script src="../asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../asset/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../asset/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../asset/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../asset/js/main.js"></script>






<div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="asset/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index-admin.php" class="nav-item nav-link active"><i class="fa fa-home"></i>Dashboard</a>
                    <a href="tambah_data_pelanggan.php" class="nav-item nav-link"><i><svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><path d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3zM504 312V248H440c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V136c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H552v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg></i>Tambah data</a>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448a24 24 0 1 0 0-48 24 24 0 1 0 0 48z"/></svg></i>Teknisi</a>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Layanan</a>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/></svg></i>Service masuk</a>
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg></i>Laporan</a>
                    
                    <a href="#" class="btn btn-sm btn-primary">Log out</a>
              
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Data pelanggan terbaru</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                <th scope="col">No</th>
                                <th scope="col">nama</th>
                                <th scope="col">nomer telpon</th>
                                <!-- tabel pelanggan end  -->

                                <!-- tabel service start -->
                                <th scope="col">nama perangkat</th>
                                <th scope="col">model</th>
                                <th scope="col">tanggal masuk</th>
                                <!-- <th scope="col">deskripsi</th> -->
                                <!-- end  -->

                                <!-- tabel teknisi start -->
                                <th scope="col">nama teknisi</th>
                                <!-- end  -->

                                <th scope="col">status pembayaran</th>
                                <!-- <th>total biaya</th> -->

                                <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                foreach($data_transaksi as $data){

                                ?>
                            <tbody>
                                <tr>
                                <td><?= $no++?></td>
                                <!-- tabel pelanggan  -->
                                <td><?= $data['nama']?></td>
                                <td><?= $data['no_hp']?></td>
                                <!-- end  -->

                                <!-- tabel service start -->
                                <td><?= $data['nama_perangkat']?></td>
                                <td><?= $data['model']?></td>
                                <td><?= $data['tanggal_masuk']?></td>
                                <!-- end  -->

                                <!-- table teknisi start  -->
                                <td><?= $data['nama_teknisi']?></td>

                                <td><?= $data['status_transaksi']?></td>                        
                                <td><a class="btn btn-sm btn-primary" href="">show</a></td>
                                </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>

                <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-4">Data service masuk</h6>
                            <a href="DataService/DataService.php">Detail</a>
                        </div>
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                <th scope="col">No</th>
                                <!-- <th scope="col">nama</th> -->
                                <th scope="col">Nama perangkat</th>
                                <!-- tabel pelanggan end  -->

                                <!-- tabel service start -->
                                <th scope="col">tanggal masuk</th>
                                <!-- <th scope="col">deskripsi</th> -->
                                <!-- end  -->

                                <!-- tabel teknisi start -->
                                <th scope="col">teknisi</th>
                                <!-- end  -->
                                <!-- <th>total biaya</th> -->
                                </tr>
                            </thead>
                            <?php
                                $no = 1;
                                foreach($data_service as $data){
                                ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $data['nama_perangkat']?></td>
                                    <td><?= $data['tanggal_masuk']?></td>
                                </tr>
                            </tbody>
                            <?php
                                }
                                ?>
                        </table>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Tambah data pelanggan</h6>
                            <form action="proses.php?aksi=tambah" method="post">
                                <table>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nama" id="nama" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="alamat" id="alamat" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">No.Hp</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="no_hp" id="no_hp" class="form-control" >
                                        </div>
                                    </div>

                                    <div class="m-n3">
                                        <button type="submit" class="btn btn-primary m-2">Simpan</button>
                                        <a href="index_pelanggan.php" class="btn btn-danger m-2">batal</a>
                                    </div>    
                                </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Recent Sales End -->

            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">service komputer</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>