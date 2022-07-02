<?php

$tabel_produk = '';

include('../template/config/db_connect.php');

//Membuat query untuk semua informasi produk
$sql = 'SELECT nama_produk, deskripsi_produk, harga_produk, ID_produk FROM tabel_produk';

//Untuk membuat query dan mendapatkan hasil
$result = mysqli_query($conn, $sql);

//fetching hasil dari baris sebagai array
$tabel_produk = mysqli_fetch_all($result, MYSQLI_ASSOC);

//hasil free dari memori
mysqli_free_result($result);

//menutup koneksinya
mysqli_close($conn);

explode(',', $tabel_produk[0]['deskripsi_produk'])

?>

<?<php
//menampilkan header
include "template/header.php";

//melakukan ridirect jika bukan admin
if(!isset($_SESSION['user'])|$checkrole!=1){
   header("location:../login.php");
}

?>

<?php include('../template/header_produk.php')?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">
<style type="text/css">
        .chair{
            width: 80px;
            margin: 40px auto -80px;
            display: block;
            float: left;
            position: relative;
            top: -30px;
            margin-left: 40px;
        }
        h6{
            font-weight: bold;
        }
    </style>

    <h4 class ="center grey-text">Produk Tersedia</h4>

<div class="container">
    <div class="row">
        <?php foreach($tabel_produk as $tabel_produks){  ?>

            <div class="col s6 md3">
                <div class="card z-depth-0">
                <img src="../template/img/armchair.svg" class="chair" >
                    <div class="card-content center ">   
                        <h6><?php echo htmlspecialchars($tabel_produks['nama_produk']); ?></h6>
                    </div>
                    <div class="card-content">
                        <div><?php echo htmlspecialchars($tabel_produks['deskripsi_produk']); ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="details.php?ID_produk=<?php echo $tabel_produks['ID_produk']?>" class="brand-text">more info</a>
                    </div>
                </div>
            </div>
            
            <?php } ?>

            <?php if(count($tabel_produk) >= 4): ?>
                <p> Lihat lainnya >>></p>
            <?php else: ?>
                <p> <<< Lihat halaman awal</p>
            <?php endif; ?>
    </div>
</div>

    </body>
</html>

<?php include('../template/footer.php')?>
