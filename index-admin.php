
<?php
include 'database.php';
$db = new Database();
$data_reservasi = $db->tampilReservasi();
include "atas-samping.php";
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Home</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Selamat datang dihalaman dashboard!</li>
                        </ol>
                        <div class="row">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><p><h3>aplikasi reservasi komputer berbasis website</h3></p></div>
                                </div>
                            </div>                    
                            
                            
                </main>

<?php
include "footer.php";
?>