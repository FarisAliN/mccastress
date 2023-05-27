<?php
include("koneksi.php");
mysqli_query($con, "INSERT INTO tbwisata (
		wisata,
		lokasi,
		konten,
		waktu,
		detail,
		foto
		)
	VALUES (
	'$_POST[wisata]',
	'$_POST[lokasi]',
	'$_POST[konten]',
	'$_POST[waktu]',
	'$_POST[detail]',
	'$_POST[foto]')");
header ('location:tambah-fotowisata.php?insert=sukses');
?>