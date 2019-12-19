<?php

$server = "localhost"; 
$user = "root";
$pass = "";
$db_nama = "meuraxa";

$koneksi= mysqli_connect($server,$user,$pass,$db_nama);

if (!$koneksi) {
	die("koneksi ke dalam database gagal :". mysqli_connect_error());
} 

?>