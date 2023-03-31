<?php
session_start();
if(empty($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login ');
    window.location.assign('../index2.php');
    </script>";
}
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin - Aplikasi Pembayaran SPP.</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h3>Aplikasi Pembayaan SPP.</h3>
    <div class="alert alert-info">
            Anda Login Sebagai <b>ADMINISTRATOR</b> Aplikasi Pembayaran SPP.
    </div>
    <a href="admin.php" class="btn btn-primary">Administrator</a>
    <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
    <a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
    <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
    <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
    <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
    <a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
    <a href="admin.php?url=logout" class="btn btn-primary">Logout</a>

    <div class="card mt-2">
        <div class="card-body">
            <!-- ini isi web -->
            <?php
            $file = @$_GET['url'];
            if(empty($file)) {
                echo"<h4>Selamat Datang Di Halaman Administrator.</h4>";
                echo"Apalikasi Pembayaran SPP digunkan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";

            }else {
                include $file.'.php';
            }
            ?>
        </div>

    </div>
    





</div>    



<section src="../js/bootstrap.bundle.min.js"></section>
</body>
</html>