<?php
require_once("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
   
    $id = mysqli_real_escape_string($koneksi, $_POST['id']);
    $no_identitas = mysqli_real_escape_string($koneksi, $_POST['no_identitas']);
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $status = mysqli_real_escape_string($koneksi, $_POST['status']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);

   
    $query = "UPDATE user SET no_identitas=?, nama=?, status=?, username=?, password=?, role=? WHERE id=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param("ssssssi", $no_identitas, $nama, $status, $username, $password, $role, $id);

    if ($stmt->execute()) {
        header("location: user.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Permintaan tidak valid.";
}

$koneksi->close();
?>
