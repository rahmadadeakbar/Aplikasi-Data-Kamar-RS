<?php

if(isset($_POST['tambah'])){

	include 'koneksidb.php';

	$nama = $_POST['nama_tukang'];
	$jk = $_POST['jk'];
	$alamat =$_POST['alamat'];
	$bidang =$_POST['bidang'];
	$jabatan =$_POST['jabatan'];
	$nohp =$_POST['no_hp'];
	$upah =$_POST['upah_harian'];
	$nik = $_POST['nik'];

	$input =mysqli_query($koneksi,"insert into data_tukang values(null,'$nama','$jk','$alamat','$bidang','$jabatan','$nohp','$upah','$nik')") or die(mysql_error());


	if($input){

		echo "<script> alert('data berhasil ditambah');
			window.location='../index.php?page=tabel';</script> ";
	}
}
?>