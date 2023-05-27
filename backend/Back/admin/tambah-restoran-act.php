<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbrestoran (
		restoran,
		lokasi,
		konten,
		waktu,
		foto,
		detail
		)
	VALUES (
	'$_POST[restoran]',
	'$_POST[lokasi]',
	'$_POST[konten]',
	'$_POST[waktu]',
	'$_POST[foto]',
	'$_POST[detail]')");
header ('location:restoran.php?insert=sukses');
?>