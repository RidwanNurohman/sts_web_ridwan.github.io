<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <title>Home</title>
</head>

<body>
  
  <?php
  session_start();
  if ($_SESSION['status'] != "login") {
    header("location:login.php?msg=belum_login");
  } else {
    require('navbar.php');
  }
  ?>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
<div class="container mt-5">

    <div class="row text-center">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
              <div class="card-body">
              

              <?php
              $q = $koneksi->query("SELECT COUNT(*) AS jmlBarang FROM barang");
              $barang = $q->fetch_array();
              ?>

                <h5 class="card-title">Data Barang</h5>
                <p class="card-text">Jumlah barang yang tersedia </p>
                <h4><?= $barang['jmlBarang']; ?></h4>
                <a href="barang.php" class="btn btn-dark btn-block">Lihat data barang</a>
             </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
              <div class="card-body">

              <?php
                $q = $koneksi->query("SELECT COUNT(*) AS jmlUser FROM user ");
                $user = $q->fetch_array();
                ?>

                <h5 class="card-title">Data User</h5>
                <p class="card-text">Jumlah user yang terdaftar </p>
                <h4><?= $user['jmlUser']; ?></h4>
                <a href="user.php" class="btn btn-dark btn-block">Lihat data user</a>
             </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
              <div class="card-body">

              <?php
                $q = $koneksi->query("SELECT COUNT(*) AS jmlPinjam FROM peminjaman");
                $peminjaman = $q->fetch_array();
                ?>

                <h5 class="card-title">Data Peminjaman</h5>
                <p class="card-text">Jumlah barang yang dipinjam </p>
                <h4><?= $peminjaman['jmlPinjam']; ?></h4>
                <a href="peminjaman.php" class="btn btn-dark btn-block">Lihat data peminjaman</a>
             </div>
        </div>
      </div>
    </div>  

    <div class="col-md-4 pt-4 mr-1 ">
        <div class="card" style="width: 18rem;">
              <div class="card-body">

              <?php
                $q = $koneksi->query("SELECT COUNT(*) AS jmlKembali FROM pengembalian");
                $pengembalian = $q->fetch_array();
                ?>

                <h5 class="card-title">Data Pengembalian</h5>
                <p class="card-text">Jumlah barang  dikembalikan </p>
                <h4><?= $pengembalian['jmlKembali']; ?></h4>
                <a href="pengembalian.php" class="btn btn-dark btn-block">Lihat data pengembalian</a>
             </div>
        </div>
      </div>
    </div>  

</body>

</html>