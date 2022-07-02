<?php
include("../template/config/db_connect.php");
$conn = mysqli_query();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $ID_produk = isset($_POST['ID_produk']) && !empty($_POST['ID_produk']) && $_POST['ID_produk'] != 'auto' ? $_POST['ID_produk'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama_produk = isset($_POST['nama_produk']) ? $_POST['nama_produk'] : '';
    $deskripsi_produk = isset($_POST['deskripsi_produk']) ? $_POST['deskripsi_produk'] : '';
    $harga_produk = isset($_POST['harga_produk']) ? $_POST['harga_produk'] : '';

    // Insert new record into the contacts table
    $result = $conn->prepare('INSERT INTO tabel_produk VALUES (?, ?, ?, ?, ?)');
    $result->execute([$ID_produk, $nama_produk, $deskripsi_produk, $harga_produk]);
    // Output message
    $msg = 'Created Successfully!';
}
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">

    <div class="content update">
        <h2>Tambah Produk</h2>
        <form action="create.php" method="post">
            <label for="ID_produk">ID_produk</label>
            <label for="nama_produk">Nama Produk</label>
            <input type="text" name="ID_produk" value="auto" id="ID_produk">
            <input type="text" name="nama_produk" id="nama_produk">
            <label for="deskripsi_produk">Deskripsi Produk</label>
            <label for="harga_produk">Harga</label>
            <input type="text" name="deskripsi_produk" id="deskripsi_produk">
            <input type="text" name="harga_produk" id="harga_produk">
            <input type="submit" value="Create">
        </form>
        <?php if ($msg): ?>
        <p><?=$msg?></p>
        <?php endif; ?>
    </div>

</html>

<?php
//menampilkan footer
include "../template/footer.php";
?>