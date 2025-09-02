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
     <?php include __DIR__ . "/utils/navbar.utils.php"; ?>
    
    <?php 
    // include controller & view
    include __DIR__ . "/../controller/participate.controller.php";
    include __DIR__ . "/participate/participate.view.php";

    $participates = new ParticipateView();
    ?>

    <!-- mencari produk via url -->
    <?php $participates->find(); ?> 
    

    <!--semua produk-->
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
        <?php $participates->show() ?>
    </table>

    <!-- footer disini -->
    </body>
</html>