<?php
require_once('database.php');
$data = tampildata1('user');
$nomor = 0;
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

  <title>Barang</title>
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
    function hapusData(id) {
      if (confirm("Apakah yakin akan menghapus data ini")) {
        window.location.href = 'delete2.php?id=' + id;
      }
    }
  </script>

<div id="content-wrapper" class="d-flex flex-column">

<div id="content">

    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      
    </nav>

    <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Table User</h1>

<div class="card shadow mb-4">
<div class="card-body">
<div class="row justify-content-end pr-3">
<a href="tambahbarang.php"><button type="button" class="btn btn-success">Tambah Barang</button></a>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
    <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">No Identitas</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $item): ?>
                    <?php $nomor++; ?>
                    <tr>
                        <th scope="row">
                            <?php echo $nomor; ?>
                        </th>
                        <td>
                            <?php echo $item['id']; ?>
                        </td>
                        <td>
                            <?php echo $item['no_identitas']; ?>
                        </td>
                        <td>
                            <?php echo $item['nama']; ?>
                        </td>
                        <td>
                            <?php echo $item['status']; ?>
                        </td>
                        <td>
                            <?php echo $item['username']; ?>
                        </td>
                        <td>
                            <?php echo $item['password']; ?>
                        </td>
                        <td>
                            <?php echo $item['role']; ?>
                  <td>
                <?php
                    echo "
                    <a href='edit2.php?id=$item[id]'><button type='button' class='btn btn-secondary btn-sm'>Edit</button></a>
                    |
                    <a href='javascript:hapusData(".$item['id'].")'><button type='button' class='btn btn-danger btn-sm'>Hapus</button></a>
                    "
                ?>
                  </td>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>

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