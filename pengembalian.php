<?php
require_once('database.php');
// $data = tampildata('notes');
$data = tampildata1('pengembalian');
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

  <title>Pengembalian</title>
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
        window.location.href = 'delete4.php?id=' + id;
      }
    }
  </script>
  <div id="content-wrapper" class="d-flex flex-column">

<div id="content">


    <div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Table Data Pengembalian</h1>

<div class="card shadow mb-4">
<div class="card-body">
<div class="row justify-content-end pr-3">
<button onclick="printData()" class="btn btn-success">
<i class="fas fa-fw fa-print"></i> Print
</button>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>No Identitas</th>
            <th>Kode Barang</th>
            <th>Jumlah</th>
            <th>Keperluan</th>
            <th>Status</th>
            <th>Tanggal Kembali</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $pengembalian) : ?> 
        <?php $nomor++; ?>
        <tr>
            <th scope="row"><?php echo "$nomor"; ?></th>
            <td><?php echo "$pengembalian[no_identitas]";?></td>
            <td><?php echo "$pengembalian[kode_barang]";?></td>
            <td><?php echo "$pengembalian[jumlah]";?></td>
            <td><?php echo "$pengembalian[keperluan]";?></td>
            <td><?php echo "$pengembalian[status]";?></td>
            <td><?php echo "$pengembalian[tgl_kembali]";?></td>
            <td>
                <?php
                    echo "
                    <a href='javascript:hapusData(".$pengembalian['id'].")'><button type='button' class='btn btn-secondary btn-sm'>Selesai</button></a>
                    "
                ?>
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


<script>
function printData() {
var printWindow = window.open('', '_blank');
printWindow.document.write('<html><head><title>Data Peminjaman</title></head><body>');
printWindow.document.write('<style>table {border-collapse: collapse;width: 100%;}th, td {border: 1px solid #ddd;padding: 8px;text-align: left;}th {background-color: #f2f2f2;}</style>');
printWindow.document.write(document.getElementById('dataTable').outerHTML);
printWindow.document.write('</body></html>');
printWindow.document.close();
printWindow.print();
}
</script>

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