<?php
//menampilkan header
include "template/header.php";

//menentukan variabel untu email, kategori, dan produk pada kode php di html supaya data input menetap dalam form
$kategori = $email = $produk = '';
//jika ada inputan yang eror
$errors = array('email'=>'','kategori'=>'', 'produk'=>'');

//untuk mendapatkan data yang diinput
    if(isset($_POST['submit'])){
        //htmlspecialcharacter untuk menjaga dari malicious attack

        //Memeriksa email
        if(empty($_POST['email'])){
            $errors['email'] = 'Email Dibutuhkan <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email harus berupa alamat email yang valid';
            }
        }

        //Memeriksa kategori
		if(empty($_POST['kategori'])){
			$errors['kategori'] = 'Kategori dibutuhkan <br />';
		} else{
			$kategori = $_POST['kategori'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $kategori)){
				$errors['kategori'] = 'Kategori harus berupa kalimat dan spasi';
			}
		}

        //Memeriksa produk
        if(empty($_POST['produk'])){
            $errors['produk'] = 'Setidaknya satu produk dibutuhkan <br />';
        } else {
            $produk = $_POST['produk'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $produk)){
                $errors['produk'] = 'Produk hanya berupa koma untuk memisahkan list';
            }
        }

        if(array_filter($errors)){
            echo 'Terdapat eror pada form';
        }else{
            echo 'Form sudah valid';
        }

    } // akhir dari pemeriksaan dengan POST
?>

<!DOCTYPE html>
<html>
    <!-- Membuat form add untuk memasukkan data-->
    <section class="container black-text">
        <h4 class=center>Tambah Produk</h4>
        <form class="white" action="add.php" method="POST">
            <label>Email Anda:</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars ($email) ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <label>Kategori:</label>
            <input type="text" name="kategori" value="<?php echo htmlspecialchars ($kategori) ?>">
            <div class="red-text"><?php echo $errors['kategori']; ?></div>
            <label>Nama Produk:</label>
            <input type="text" name="produk" value="<?php echo htmlspecialchars ($produk) ?>">
            <div class="red-text"><?php echo $errors['produk']; ?></div>
            <button class="center">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </button>
        </form>
    </section>
    

</body>
</html>

<?php
//menampilkan footer
include "template/footer.php";
?>