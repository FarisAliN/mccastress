<?php
include("koneksi.php");
$sql = "DELETE FROM tbrestoran WHERE kdrestoran='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:restoran.php?delete=sukses');
?>