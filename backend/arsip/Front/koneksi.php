<?php 
 
$server = "db_mysql";
$user = "root";
$pass = "root";
$database = "db_pariwisata";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>