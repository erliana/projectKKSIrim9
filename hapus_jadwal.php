<?php
include("koneksi.php");
$id=$_GET['id'];
$query = mysqli_query($conn,"delete from jadwal where kode='$id'") or die(mysqli_error($conn));
//kembali ke halaman user.php
header('location:data_jadwal.php?update=3');
exit;
?>