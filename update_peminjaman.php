<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
   
    $tgl_pinjam = mysqli_real_escape_string($koneksi, $_POST['tgl_pinjam']);
    $tgl_kembali = mysqli_real_escape_string($koneksi, $_POST['tgl_kembali']);
    $no_identitas = mysqli_real_escape_string($koneksi, $_POST['no_identitas']);
    $kode_barang = mysqli_real_escape_string($koneksi, $_POST['kode_barang']);
    $jumlah = mysqli_real_escape_string($koneksi, $_POST['jumlah']);
    $keperluan = mysqli_real_escape_string($koneksi, $_POST['keperluan']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);
    $id_login = mysqli_real_escape_string($koneksi, $_POST['id_login']);

   
    $query = "UPDATE peminjaman SET tgl_pinjam=?, tgl_kembali=?, no_identitas=?, kode_barang=?, jumlah=?, keperluan=?, status=?, id_login=? WHERE id=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssssssi", $tgl_pinjam, $tgl_kembali, $no_identitas, $kode_barang, $jumlah, $keperluan, $status, $id_login, $id);

    if ($stmt->execute()) {
        header("location: peminjaman.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Permintaan tidak valid.";
}

$koneksi->close();
?>
