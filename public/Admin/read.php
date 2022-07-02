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
   header("location:login.php");
}


?>


<?php
//menampilkan footer
include "../template/header_produk.php";
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">
<style type="text/css">
       .bold { font-weight: bold; }
       table {width: 50%;
        background-color: white;
            }
       .head {
            background-color: black;
            }
</style>

    <div class="content read">
        <h4 class="center grey-text">Data Produk</h4>
        <a href="../produk/add.php" class="btn brand z-depth-0">Tambah Produk</a>
        <table class="highlight">
            <thead class="head">
                <tr class="bold white-text">
                    <td>ID</td>
                    <td>Nama Produk</td>
                    <td>Deskripsi</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tabel_produk as $tabel_produks): ?>
                <tr>
                    <td><?=$tabel_produks['ID_produk']?></td>
                    <td><?=$tabel_produks['nama_produk']?></td>
                    <td><?=$tabel_produks['deskripsi_produk']?></td>
                    <td><?=$tabel_produks['harga_produk']?></td>
                    <td class="actions">
                        <div class="col s6 m6 l3">
                            <!-- Menghapus Form -->
                            <form action="details.php" methode="REQUEST">
                            <input type="hidden" name="id_to_delete" value="<?php echo $tabel_produks['ID_produk'] ?>">
                            <input type="submit" name="delete" value="Delete" class="btn brand-1 z-depth-0 waves-effect">
                            </form>
                        </div>
                        <div class="col s6 m6 l3">
                            <!-- Memperbaharui Form -->
                            <form action="details.php" methode="GET">
                                <input type="hidden" name="id_to_update" value="<?php echo $tabel_produks['ID_produk'] ?>">
                                <input type="submit" name="update" value="Update" class="btn brand z-depth-0">
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</html>

<?php
//menampilkan footer
include "../template/footer.php";
?>