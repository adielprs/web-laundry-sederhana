<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php
    include 'koneksi.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM laundry WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_assoc($result);

    ?>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Edit Data Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <form action="ProsesEditPesanan.php" method="post">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>"required><br>
                            </div>

                            <div class="form-group">
                                <label>alamat</label>
                                <input type="text" class="form-control" name="alamat"   value="<?= $data['alamat']; ?>"required><br>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" required><br>
                            </div>

                           <div class="form-group">
                                <label for="email">Jumlah Barang</label>
                                <input type="number" class="form-control" name="jumlahbarang"  value="<?= $data['jumlahbarang']; ?>" required><br>
                            </div>

                            <div class="form-group">
                                <label for="exampleSelect1">Jenis Barang</label>
                                <select class="form-control" name="jenisbarang" value="<?= $data['jenisbarang']; ?>" required><br>
                                    <option>Pakain</option>
                                    <option>Karpet</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><i class='bx bxs-save'>Save</i></button>
                            <button type="submit" class="btn btn-danger"><i class='bx bx-x-circle'>Batal</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>