<?php
require_once('database.php');
session_start();

if (isset($_POST['masuk'])) {
  if (cek_login($_POST['username'], $_POST['password'])) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    if ($_SESSION['role'] == 'admin') {
      header("location:barang.php");
    } else {
      header('location:peminjaman2.php');
    } 
  } else {
    $_SESSION['error'] = '<b>Username</b> atau <b>Password</b> Tidak Valid';
    header("location:login.php?msg=gagal");
  }
}
?>

<?php
if(isset($_SESSION['error'])) {
    ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <center><?= $_SESSION['error']; ?></center>
    <button type="button" class="close" data-dismiss="alert" aria-laber="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<?php } ?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 
    <style>
    body {
      background-image: url('sekolahbn2.jpg'); /* Tambahkan lokasi gambar background di sini */
      background-size: cover; /* Untuk memastikan gambar background menutupi seluruh area */
      background-position: center; /* Untuk memposisikan gambar background ke tengah */
      color: black; /* Warna teks putih untuk kontras */
    }
  </style>


</head>

<body>

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


  <div class="container pt-5">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
          <div class="text-center">
         <img src="logobn.png" width="150" alt="...">
      </div>
            <h1 class="mb-0" align="center"><span class="text-dark">Login</span></h1>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="username" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                  placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
              <button type="submit" name="masuk" class="btn btn-dark btn-lg btn-block">LOGIN</button>
              <div class="text-center">
                Belum punya akun, silahkan <a href="registeruser.php">Register</a>
                <p class="mt-5 mb-3 text-muted">SMK BAKTI NUSANTARA 666</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
