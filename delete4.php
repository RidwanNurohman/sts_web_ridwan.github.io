<?php
require_once('database.php');
$id = $_GET['id'];
$data = delete('pengembalian', $id);
if ($data) {
    header("location:pengembalian.php");
}
?>