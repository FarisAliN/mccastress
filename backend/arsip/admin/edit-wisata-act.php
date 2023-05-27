<?php
ob_start(); 
include ("koneksi.php");
$sql = "UPDATE tbwisata SET 
			wisata = '$_POST[wisata]',
			lokasi = '$_POST[lokasi]',
			konten = '$_POST[konten]',
			waktu = '$_POST[waktu]',
			detail = '$_POST[detail]',
			foto = '$_POST[foto]'

		WHERE kdwisata='$_POST[id]'";

$sql2 = "UPDATE tbdetailwisata SET 
			g1 = '$_POST[g1]',
			g2 = '$_POST[g2]',
			g3 = '$_POST[g3]',
			g4 = '$_POST[g4]'

		WHERE kdwisata='$_POST[id]'";

mysqli_query($con,$sql);
mysqli_query($con,$sql2);
echo $sql;
echo $sql2;
header('Location:wisata.php?edit_wisata=sukses');
?>