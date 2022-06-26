<?php

//Menghubungkan database
$conn = mysqli_connect('localhost', 'ani', 'Harrypotter123@', 'furniturelife');

//mengecek koneksi
if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

//Membuat query untuk semua produk


?>

<!DOCTYPE html>
<html>

<?php include('template/header.php')?>

<?php include('dashboard.php')?>

<?php include('template/footer.php')?>

</body>
</html>