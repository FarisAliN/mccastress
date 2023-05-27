<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbhotel (
		hotel,
		lokasi,
		konten,
		harga,
		foto,
		detail
		)
	VALUES (
	'$_POST[hotel]',
	'$_POST[lokasi]',
	'$_POST[konten]',
	'$_POST[harga]',
	'$_POST[foto]',
	'$_POST[detail]')");
header ('location:hotel.php?insert=sukses');
?>