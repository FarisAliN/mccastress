<?php
ob_start(); 
include ("koneksi.php");
$sql = "UPDATE tbrestoran SET 
			restoran = '$_POST[restoran]',
			lokasi = '$_POST[lokasi]',
			konten = '$_POST[konten]',
			waktu = '$_POST[waktu]',
			foto = '$_POST[foto]',
			detail = '$_POST[detail]'

		WHERE kdrestoran='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header('Location:restoran.php?edit_restoran=sukses');
?>