<?php
// Pastikan file ini memiliki akses ke database.php
require_once('database.php');

// Cek apakah ada ID barang yang diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil data barang berdasarkan ID
    $peminjaman = editdatabarang('peminjaman', $id);

    // Cek apakah barang ditemukan
    if ($peminjaman) {
        ?>
        <!doctype html>
        <html lang="en">

        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
                integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
            <title>Edit Peminjaman</title>
        </head>
        <body>
            <?php
            session_start();
            if ($_SESSION['status'] <> "login") {
                header("location:login.php?msg=belum_login");
            } else {
                require('navbar.php');
            }
            ?>

            <script language="JavaScript" type="text/javascript">
                function kornfirmasiUpdate(id) {
                    if (confirm("Apakah yakin akan merubah data user ini")) {
                        window.location.href = 'update_peminjaman.php?id=' + id;
                    }
                }
            </script>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-4">
                        <form action="update_peminjaman.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                            <div class="form-group">
                                <label for="no_identitas">No Identitas</label>
                                <input class="form-control" id="no_identitas" name="no_identitas"
                                    value="<?php echo $user['no_identitas']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input class="form-control" id="nama" name="nama"
                                    value="<?php echo $user['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input class="form-control" id="status" name="status"
                                    value="<?php echo $user['status']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <input class="form-control" id="role" name="role" value="<?php echo $user['role']; ?>">
                            </div>
                            <button type="submit" class="btn btn-primary" name="update" value="update">Update Peminjaman</button>
                            <a type="button" class="btn btn-primary" href="peminjaman.php" name="kembali"
                                value="kembali">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and jQuery -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
                crossorigin="anonymous"></script>

        </body>

        </html>
        <?php
    } else {
        echo "kode barang tidak ditemukan.";
    }
} else {
    echo "ID user tidak diberikan.";
}
?>