<?php
include 'koneksi.php';


    $id = $_GET['hapus_id'];
    $query = "DELETE FROM laundry WHERE id='$id';";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header('Location: admin.php');
        exit();
    } else {
        echo 'Gagal menghapus data';
    }

?>