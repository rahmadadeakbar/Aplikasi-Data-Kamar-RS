<?php

if(isset($_POST['ubah'])){

	include 'koneksidb.php';

	$id =$_POST['id'];
	$nama = $_POST['nama_tukang'];
	$nik = $_POST['no_nik'];
	$jk = $_POST['jk'];
	$alamat =$_POST['alamat'];
	$bidang =$_POST['bidang'];
	$jabatan =$_POST['jabatan'];
	$nohp =$_POST['no_hp'];
	$upah =$_POST['upah_harian'];

	$ubah=mysqli_query($koneksi,"update data_tukang set nama_tukang='$nama', no_nik='$nik', jk='$jk', alamat='$alamat', bidang='$bidang', jabatan='$jabatan', no_hp='$nohp', upah_harian='$upah' where id_tukang='$id'") or die(mysql_error());

	if($ubah){
    
		echo "<script> alert('data berhasil diubah');
			window.location='../index.php?page=tabel';</script> ";   
	}
}
?>