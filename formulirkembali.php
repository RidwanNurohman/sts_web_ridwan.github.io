<?php
    session_start();
    include "database.php";

    // Handle form submission
    if(isset($_POST['pinjam'])) {
        $no_identitas = $_SESSION['no_identitas'];
        $kode_barang = $_POST['kode_barang'];
        $jumlah = $_POST['jumlah'];
        $keperluan = $_POST['keperluan'];
        $status = 'Dikembalikan';
        $tgl_kembali = date('Y-m-d H:i:s');

        // Insert data into peminjaman table
        $query = "INSERT INTO pengembalian (no_identitas, kode_barang, jumlah, keperluan, status, tgl_kembali) 
                  VALUES ('$no_identitas', '$kode_barang', $jumlah, '$keperluan', '$status', '$tgl_kembali')";
        mysqli_query($koneksi, $query);

        // Update jumlah barang in the barang table
        $update_query = "UPDATE barang SET jumlah = jumlah + $jumlah WHERE kode_brg = '$kode_barang'";
        mysqli_query($koneksi, $update_query);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Pengembalian</title>
</head>

<body>
<div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                <div class="container-fluid">
                    <h1 class="h3 mb-4 text-gray-800">Pengembalian Barang</h1>
                    <form class="user" method="POST" action="formulirkembali.php">
                    <div class="form-group">
                    <?php
        // $user_data = checkLogin($_SESSION['username']);
        // $no_identitas = $user_data[0]['no_identitas']; // Sesuaikan dengan struktur data yang sesuai
    ?>
    <input type="hidden" class="form-control form-control-user" placeholder="No Identitas" name="no_identitas" value="<?php echo $no_identitas ?>">
</div>

    <div class="form-group">
        <label for="kode_barang">Kode Barang</label>
        <select class="form-control form-control-user" name="kode_barang">
            <?php
                $barang_data = tampildata1('barang');
                foreach ($barang_data as $barang) {
                    echo "<option value=\"$barang[kode_brg]\">$barang[nama_brg]</option>";
                }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah">Jumlah dipinjam</label>
        <input type="number" class="form-control form-control-user" placeholder="Jumlah" name="jumlah">
    </div>
    <div class="form-group">
        <label for="keperluan">Keperluan</label>
        <input type="text" class="form-control form-control-user" placeholder="Keperluan" name="keperluan">
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control form-control-user" placeholder="Status" name="status" value="">
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control form-control-user" placeholder="Tanggal Kembali" name="tgl_kembali">
    </div>
    <input type="submit" name="pinjam" class="btn btn-dark btn-user btn-block" href="pengembalian2.php">
    <a type="button" class="btn btn-dark btn-user btn-block" href="pengembalian2.php" name="kembali"
                        value="kembali">Kembali</a>
</form>

                </div>

            </div>

        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>


    <!-- Bootstrap core JavaScript-->
    <script src="resource/vendor/jquery/jquery.min.js"></script>
    <script src="resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="resource/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="resource/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="resource/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="resource/js/demo/chart-area-demo.js"></script>
    <script src="resource/js/demo/chart-pie-demo.js"></script>

    

</body>

</html>