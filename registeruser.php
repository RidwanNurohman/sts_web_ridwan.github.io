<?php
require_once('database.php');
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




  <div class="container pt-4">
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h1 class="mb-0" align="center"><span class="text-primary">REGISTER</span></h1>
          </div>
          <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-7">
                <form action="register.php" method="post">
                <p class="mt-4 mb-2  text-muted">Silahkan isi formulir ini</p>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">ID</label>
                        <input class="form-control" id="id" name="id" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">No_Identitas</label>
                        <input class="form-control" id="no_identitas" name="no_identitas" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Nama</label>
                        <input class="form-control" id="mnama" name="nama" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label>
                        <input class="form-control" id="status" name="status" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Username</label>
                        <input class="form-control" id="username" name="username" value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Password</label>
                        <input class="form-control" id="password" name="password" value="">
                    </div>
                    <div class="form-group">
                      <input type="hidden" class="form-control form-control-user" placeholder="role" name="role" value="">
                    </div>
                    <button type="submit" class="btn btn-primary" name="proses" value="proses">Register</button>
                    <a type="button" class="btn btn-primary" href="login.php" name="kembali"
                        value="kembali">Kembali</a>
                    <?php

                    ?>
            </div>
        </div>
    </div>
</body>

</html>

