<?php

$tabel_produk = '';
include("../template/config/db_connect.php");
//menampilkan header
include ("../template/header_produk.php");

//menentukan variabel untu nama_produk, deskripsi_produk, dan harga_produk pada kode php di html supaya data input menetap dalam form
$deskripsi_produk = $nama_produk = $harga_produk =  $ID_produk ='';
//jika ada inputan yang eror
$errors = array('ID_produk'=>'','nama_produk'=>'','deskripsi_produk'=>'', 'harga_produk'=>'');

//$ID_produk = $_GET['ID_produk'];

//membuat query untuk mengambil ID produk
$sql = "SELECT * FROM tabel_produk WHERE ID_produk = '$ID_produk'";


//untuk mendapatkan data yang diinput
    if(isset($_POST['update'])){

        //htmlspecialcharacter untuk menjaga dari malicious attack


        //Memeriksa nama_produk
		if(empty($_POST['nama_produk'])){
			$errors['nama_produk'] = 'Nama produk dibutuhkan <br />';
		} else{
			$nama_produk = $_POST['nama_produk'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $nama_produk)){
				$errors['nama_produk'] = 'Nama produk harus berupa kalimat dan spasi';
			}
		}

        //Memeriksa deskripsi_produk
        if(empty($POST['deskripsi_produk'])){
            $errors['deskripsi_produk'] = 'Setidaknya satu produk dibutuhkan <br />';
        } else {
            $deskripsi_produk = $_POST['deskripsi_produk'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $deskripsi_produk)){
                $errors['deskripsi_produk'] = 'Deskripsi produk hanya berupa koma untuk memisahkan list';
            }
        }

        //Memeriksa harga_produk
		if(empty($_POST['harga_produk'])){
			$errors['harga_produk'] = 'Deskripsi dibutuhkan <br />';
		} else{
			$harga_produk = $_POST['harga_produk'];
			if(!preg_match('/^[0-9]+$/', $harga_produk)){
				$errors['harga_produk'] = 'Deskripsi harga harus berupa angka dan spasi';
			}
		}

        if(array_filter($errors)){
            //echo 'Terdapat eror pada form';
        }else{
            $nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
            $deskripsi_produk = mysqli_real_escape_string($conn, $_POST['deskripsi_produk']);
            $harga_produk = mysqli_real_escape_string($conn, $_POST['harga_produk']);

            //membuat sql
            $sql ="UPDATE tabel_produk SET ID_produk = ?, nama_produk = ?, deskripsi_produk = ?, harga_produk = ? WHERE ID_produk = ?";

            //menyimpan ke database dan mengecek
            if(mysqli_query($conn, $sql)){
                //sukses
                //notifikasi ubah data dan kembali ke dasboard
                echo "
                <script>
                alert('Data berhasil diubah')
                document.location.href = 'read.php'
                </script>
                ";
            } else {
                //err
                echo 'query eror: ' . mysqli_error($conn);
            }
        }
    } // akhir dari pemeriksaan dengan POST

    
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../template/css/style.css">


    <!-- Membuat form create untuk memasukkan data-->
    <section class="container black-text">
        <h4 class= center>Ubah Produk</h4>
        <form class="white" action="update.php" method="POST">
            <input type="hidden" name="ID_produk" value="<?php echo htmlspecialchars ($ID_produk) ?>">
            <div class="red-text"><?php echo $errors['ID_produk']; ?></div>
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" value="<?php echo htmlspecialchars ($nama_produk) ?>">
            <div class="red-text"><?php echo $errors['nama_produk']; ?></div>
            <label>Deskripsi Produk:</label>
            <textarea class="input-control" name="deskripsi_produk" value="<?php echo htmlspecialchars ($deskripsi_produk) ?>"></textarea><br>
            <div class="red-text"><?php echo $errors['deskripsi_produk']; ?></div>
            <label>Harga Produk</label>
            <input type="text" name="harga_produk" value="<?php echo htmlspecialchars ($harga_produk) ?>">
            <div class="red-text"><?php echo $errors['harga_produk']; ?></div>
            <div class="center">
                <input type="submit" name="update" value="update" class="btn brand z-depth-0 waves-effect waves-light">
            </div>
        </form>
    </section>
    

</html>

<?php
//menampilkan footer
include "../template/footer.php";
?>