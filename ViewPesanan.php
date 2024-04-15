<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4><i class='bx bx-shopping-bag'>Form Pesanan</i></h4>
                    </div>
                    <div class="card-body">
                        <form action="ProsesViewPesanan.php" method="POST">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group">
                                <label for="password">alamat</label>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="email">Jumlah Barang</label>
                                <input type="number" class="form-control" name="jumlahbarang" placeholder="Jumlah Barang Anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelect1">Jenis Barang</label>
                                <select class="form-control" name="jenisbarang">
                                    <option>Pakain</option>
                                    <option>Karpet</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Pesan</button>
                            <button type="reset" class="btn btn-danger">Hapus</button>
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