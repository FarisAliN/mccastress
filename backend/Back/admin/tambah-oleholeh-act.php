<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tboleholeh (
		oleholeh,
		lokasi,
		konten,
		waktu,
		foto,
		detail
		)
	VALUES (
	'$_POST[oleholeh]',
	'$_POST[lokasi]',
	'$_POST[konten]',
	'$_POST[waktu]',
	'$_POST[foto]',
	'$_POST[detail]')");
header ('location:oleholeh.php?insert=sukses');
?>