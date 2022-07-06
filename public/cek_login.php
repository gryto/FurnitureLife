<?php 
// menghubungkan dengan koneksi
include("template/config/db_connect.php");

    //menyimpan ke database dan mengecek
    if(mysqli_query($conn, $sql))
    {
        //masuk halaman pelanggan
        echo "
        <script>
        alert('Login telah berhasil, pelanggan')
        document.location.href = 'pelanggan/dashboard.php'
        </script>
        ";
    } else{
        //masuk halaman admin
        echo "
        <script>
        alert('Login telah berhasil, admin')
        document.location.href = 'Admin/read.php'
        </script>
        ";
    } 
?>
 