<?php
require_once('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $kode_barang = $_POST['kode_barang'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $no_identitas = $_POST['no_identitas'];
    $jumlah = $_POST['jumlah'];
    $keperluan = $_POST['keperluan'];
    $status = $_POST['status']; 
    $id_login = $_POST['id_login'];

   
    $cek_stok_query = "SELECT jumlah FROM barang WHERE kode_brg = '$kode_barang'";
    $cek_stok_result = $koneksi->query($cek_stok_query);

    if ($cek_stok_result->num_rows > 0) {
        $row = $cek_stok_result->fetch_assoc();
        $stok_tersedia = $row['jumlah'];

        if ($jumlah <= $stok_tersedia) {
            
            $stok_baru = $stok_tersedia - $jumlah;
            $update_stok_query = "UPDATE barang SET jumlah = '$stok_baru' WHERE kode_brg = '$kode_barang'";
            $update_stok_result = $koneksi->query($update_stok_query);

            if ($update_stok_result) {
                
                $insert_query = "INSERT INTO peminjaman (kode_barang, tgl_pinjam, tgl_kembali, no_identitas, jumlah, keperluan, status, id_login) VALUES ('$kode_barang', '$tgl_pinjam', '$tgl_kembali', '$no_identitas', '$jumlah', '$keperluan', '$status', '$id_login')";
                $insert_result = $koneksi->query($insert_query);

                if ($insert_result) {
                    echo "<script>alert('Berhasil meminjam barang');</script>";
                    header("location:peminjaman2.php");
                } else {
                    echo "<script>alert('Gagal meminjam barang');</script>";
                    header("location:formulirpinjam.php");
                }
            } else {
                echo "<script>alert('Error updating stock');</script>";
                header("location:formulirpinjam.php");
            }
        } else {
            echo "<script>alert('Stok barang tidak mencukupi');</script>";
            header("location:formulirpinjam.php");
        }
    } else {
        echo "<script>alert('Barang tidak ditemukan');</script>";
        header("location:formulirpinjam.php");
    }

   
    $conn->close();
}
?>
