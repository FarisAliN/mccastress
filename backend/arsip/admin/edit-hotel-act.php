<?php
ob_start(); 
include ("koneksi.php");
$sql = "UPDATE tbhotel SET 
			hotel = '$_POST[hotel]',
			lokasi = '$_POST[lokasi]',
			konten = '$_POST[konten]',
			harga = '$_POST[harga]',
			foto = '$_POST[foto]',
			detail = '$_POST[detail]'

		WHERE kdhotel='$_POST[id]'";

mysqli_query($con,$sql);
echo $sql;
header('Location:hotel.php?edit_hotel=sukses');
?>