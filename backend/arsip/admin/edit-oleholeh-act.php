<?php
ob_start(); 
include ("koneksi.php");
$sql = "UPDATE tboleholeh SET 
			oleholeh = '$_POST[oleholeh]',
			lokasi = '$_POST[lokasi]',
			konten = '$_POST[konten]',
			waktu = '$_POST[waktu]',
			foto = '$_POST[foto]',
			detail = '$_POST[detail]'

		WHERE kdoleholeh='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header('Location:oleholeh.php?edit_oleholeh=sukses');
?>