<?php
include 'koneksi.php';

$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$jumlahbarang = $_POST["jumlahbarang"];
$jenisbarang = $_POST["jenisbarang"];

$query = "INSERT INTO laundry (nama, alamat, email, jumlahbarang, jenisbarang) VALUES ('$nama', '$alamat', '$email', '$jumlahbarang', '$jenisbarang')";
$result = mysqli_query($koneksi, $query);

if ($result) {
    echo '<script>alert("Ada Pesanan Masuk"); window.location.href = "admin.php";</script>';
} else {
    echo '<script>alert("Gagal menambahkan data"); window.location.href = "viewPesanan.php";</script>';
}
?>