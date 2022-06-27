<?php

include('../template/config/db_connect.php');


//mengecek GET request ID_produk parameter
if(isset($_GET['ID_produk'])){

    $ID_produk =mysqli_real_escape_string($conn, $_GET['ID_produk']);

    //Membuat sql
    $sql = "SELECT * FROM tabel_produk WHERE ID_produk = $ID_produk";

    //Mendapatkan query result
    $result = mysqli_query($conn, $sql);

    //featch result di format array
    $tabel_produks = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);


}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../template/css/style.css">
<head>

<?php include('../template/header.php')?>

<div class="container center">
    <?php if($tabel_produks): ?>
        <h4><?php echo htmlspecialchars($tabel_produks['nama_produk']); ?></h4>
        <h6>Deskripsi: </h6>
        <p><?php echo htmlspecialchars($tabel_produks['deskripsi_produk']); ?></p>
        <p>Harga: <?php echo htmlspecialchars($tabel_produks['harga_produk']); ?></p>

    <?php else: ?>
        <h5>Mohon maaf. Tidak ada produk yang tersedia.</h5>
    <?php endif; ?>


</div>

<?php include('../template/footer.php')?>


</html>