<?php
	if(isset($_GET['id'])){
		include 'koneksidb.php';

		$id = $_GET['id'];

		$kueri = mysqli_query($koneksi,"select id_tukang from data_tukang where id_tukang='$id'") or die(mysqli_error());

		if(mysqli_num_rows($kueri) == 0){

			echo '<script>window.history.back()</script>';
		}else{
			$delete = mysqli_query($koneksi,"delete from data_tukang where id_tukang='$id'");

			if($delete){

				echo "<script> alert('data berhasil dihapus');
						window.location='../index.php?page=tabel';</script>";


			}


		}
	}
?>