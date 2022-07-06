<?php

include('../template/config/db_connect.php');

if(isset($_REQUEST['delete'])){

    $id_to_delete = mysqli_real_escape_string($conn, $_REQUEST['id_to_delete']);

    $sql = "DELETE FROM tabel_produk WHERE ID_produk = $id_to_delete";

    if(mysqli_query($conn, $sql)){
        //sukses
        echo "
        <script>
        alert('Data berhasil dihapus')
        document.location.href = '../dashboard.php'
        </script>
        ";
        header('Location: ../dashboard.php');
    } else{
        //gagal
        echo 'Query error: ' . mysqli_error($conn);
    }
}

?>
