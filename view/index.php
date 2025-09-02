<?php
include "connection.php";
include "./model/participate.model.php";
include "./controller/participate.controller.php";
include "./view/participate/participate.view.php";
$participate = new ParticipateView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="U-UA-Compatible" content="edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PHP</title>
</head>
<body>
    <!-- navigation bar -->
     <?php include "./view/utils/navbar.utils.php"; ?>
    
    <!-- mencari produk via url -->
     <?php $participate->find(); ?>

    <!-- semua produk -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>KONTAK</th>
            <th>ANGKATAN</th>
            <th>ACARA</th>
            <th>LOKASI</th>
            <th>TANGGAL</th>
            <th>STATUS</th>

        </tr>
        <?php $participate->show() ?>
    </table>

    <!-- footer disini -->
    </body>
</html>