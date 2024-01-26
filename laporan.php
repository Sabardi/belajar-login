<?php 
include'database.php';
$db = new Database();
$laporan = $db->tampilLaporan();
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>hal reservasi</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" ></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <!-- <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> --> -->
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="login.php?logout=true">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index-admin.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="data_toko.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-computer"></i></div>
                                Data Toko
                            </a>
                            <a class="nav-link" href="data_pelanggan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                                Data Pelanggan
                            </a>
                            <a class="nav-link" href="reservasi.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-computer"></i></div>
                                Reservasi
                            </a>
                            <a class="nav-link" href="laporan.php">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book"></i></div>
                                Laporan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                        <?php
                        session_start();
                        echo "<h5>Welcome ".$_SESSION['username']."</h5>";
                        ?>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Laporan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Laporan Resrvasii</li>
                        </ol>                                                
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i> -->
                                <!-- <button  class="btn btn-primary btn-block"> -->
                                    <!-- <a href="add-reserv.php" class="btn btn-primary ">Tambah Data</a> -->
                                    <!-- Tambah Data
                                </button> -->
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Deskripsi Reservasi</th>
                                            <th>Biaya</th>
                                            <th>status</th>
                                            <th>Tanggal</th>
                                            <!-- <th>Sekolah Asal</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                            <?php
                                                $no = 1;
                                                foreach($laporan as $row){
                                                ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $row['nama_pelanggan']; ?></td>
                                                <td><?php echo $row['desk_reservasi']; ?></td>
                                                <td><?php echo $row['biaya']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><?php echo $row['tanggal']; ?></td>

                                                
                                                <td>
                                                        <!-- <a href="edit_reservasi.php?id=<?php echo $row['id']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a> -->
                                                        <a href="proses_reservasi.php?id=<?php echo $row['id']; ?>&aksi=hapusLaporan" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
                                            </tr>
                                            <?php
                                                }
                                                ?>
                                        <!-- <p>Total: <?php echo mysqli_num_rows($d) ?></p> -->

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
