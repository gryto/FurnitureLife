<?php
//mengkoneksikan database dari file config db_connect
include("../template/config/db_connect.php");

//menampilkan header
include ("../template/header_produk.php");

//menentukan variabel untu nama_produk, deskripsi_produk, dan harga_produk pada kode php di html supaya data input menetap dalam form
$deskripsi_produk = $nama_produk = $harga_produk = '';
//jika ada inputan yang eror
$errors = array('nama_produk'=>'','deskripsi_produk'=>'', 'harga_produk'=>'');

//untuk mendapatkan data yang diinput
    if(isset($_GET['submit'])){
        //htmlspecialcharacter untuk menjaga dari malicious attack

        

        

    } // akhir dari pemeriksaan dengan POST
?>


<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">
    <!-- Membuat form add untuk memasukkan data-->
    <section class="container black-text">
        <h4 class=center>Tambah Produk</h4>
        <form class="white" action="add.php" method="POST">
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" value="<?php echo htmlspecialchars ($nama_produk) ?>">
            <div class="red-text"><?php echo $errors['nama_produk']; ?></div>
            <label>Deskripsi Produk:</label>
            <input type="text" name="deskripsi_produk" value="<?php echo htmlspecialchars ($deskripsi_produk) ?>">
            <div class="red-text"><?php echo $errors['deskripsi_produk']; ?></div>
            <label>Harga Produk</label>
            <input type="text" name="harga_produk" value="<?php echo htmlspecialchars ($harga_produk) ?>">
            <div class="red-text"><?php echo $errors['harga_produk']; ?></div>
            <button class="center">
                <input type="update" name="update" value="update" class="btn brand z-depth-0">
            </button>
        </form>
    </section>
    

</body>
</html>

<?php
//menampilkan footer
include "../template/footer.php";
?>