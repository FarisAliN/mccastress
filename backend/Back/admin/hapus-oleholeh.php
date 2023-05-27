<?php
include("koneksi.php");
$sql = "DELETE FROM tboleholeh WHERE kdoleholeh='$_GET[id]'";
mysqli_query($con,$sql);
//echo $sql;
header ('location:oleholeh.php?delete=sukses');
?>