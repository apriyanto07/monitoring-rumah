<?php
include 'koneksi.php';

$no = $_GET['no'];
$sqlDelete = "DELETE FROM notif WHERE no='$no'";
mysqli_query($koneksi, $sqlDelete);

header("location: pemberitahuan.php");
?>