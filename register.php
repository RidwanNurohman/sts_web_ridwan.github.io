<?php
require_once ("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $no_identitas = $_POST["no_identitas"];
    $nama = $_POST["nama"];
    $status = $_POST["status"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = 'member';

    $result = tambahuser($id, $no_identitas, $nama, $status, $username, $password, $role);
if($result){
    echo "<script> 'user berhasil ditambahkan' </script>";
    header("location:login.php"); 
} else {
    echo "<script> 'user gagal ditambahkan' </script>";
    header("location:registeruser.php"); 
}

    echo $result;
}
?>