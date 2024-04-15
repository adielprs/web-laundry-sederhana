<?php
include 'koneksi.php';



    $id = $_POST['id'];
    $name = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jumlahbarang = $_POST['jumlahbarang'];
    $jenisbarang = $_POST['jenisbarang'];

    $query = "UPDATE laundry SET nama='$name', alamat='$alamat', email='$email', jumlahbarang='$jumlahbarang', jenisbarang='$jenisbarang' WHERE id=$id";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo '<script>alert("Pesanan Di Simpan"); window.location.href = "admin.php";</script>';
        exit();
    } else {
        echo 'Gagal mengubah data';
    }
    
?>