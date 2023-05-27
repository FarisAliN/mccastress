<?php
include("koneksi.php");
$sql = "DELETE FROM tbhotel WHERE kdhotel='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:hotel.php?delete=sukses');
?>