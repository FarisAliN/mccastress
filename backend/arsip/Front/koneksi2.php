<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "wisata";
 
$con = mysqli_connect($server, $user, $pass, $database);
 
if (!$con) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>