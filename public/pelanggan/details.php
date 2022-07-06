<?php
//koneksi database
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

<?php include('../template/header_produk.php')?>

<?php  
    function  confirmationBox() {  
        echo '<script type="text/javascript"> ';  
        echo 'var pesan = prompt("Masukkan pesan anda :", "");';  
        echo 'alert(pesan);';  
       echo '</script>';  
}  
?>  

<div class="container center">
    <?php if($tabel_produks): ?>
        <div class="row">
            <div class="col s12">
                <form class="white" action="">
                    <h4><?php echo htmlspecialchars($tabel_produks['nama_produk']); ?></h4>
                    <h6>Deskripsi: </h6>
                    <p><?php echo htmlspecialchars($tabel_produks['deskripsi_produk']); ?></p>
                    <p>Harga: <?php echo htmlspecialchars($tabel_produks['harga_produk']); ?></p>
                </form>
            </div>
            <div class="col s12">
                <!-- Membeli Form -->
                <form action="details.php" methode="REQUEST">
                <input type="hidden" name="id_to_delete" value="<?php echo $tabel_produks['ID_produk'] ?>">
                <input type="submit" name="buy" value="buy" class="btn brand z-depth-0">
                </form>
            </div>
        </div>
    <?php else: 
        //notifikasi beli dan kembali ke dasboard
        echo "
        <script>
        alert('Produk berhasil dibeli')
        document.location.href = 'dashboard.php'
        </script>
        ";    
        ?>
    <?php endif; ?>

</div>

<?php include('../template/footer.php')?>


</html>