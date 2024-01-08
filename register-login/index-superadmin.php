<?php
session_start();
echo "<h3>Welcome ".$_SESSION['username']."</h3>";
?>
<h1>Selamat datang di <b>APLIKASI HOTEL </b> </h1>
<!-- <h3><a href="logout.php" class="btn btn-primary">Keluar</a></h3> -->
<a href="login.php?logout=true" class="btn btn-primary">Logout</a>
