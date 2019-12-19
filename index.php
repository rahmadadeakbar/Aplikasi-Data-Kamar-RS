<?php 
	include 'config/koneksidb.php';
	include'header.php';
 ?>

 <!-- ini container -->
<div id="container">
	<!-- <div class="row">
		<div class="col-md-14">
			<img src="gambar/teknologi.png" width="1400" height="150">
		</div>
	</div> -->
	

<?php
	include'navbar.php';
?>




<!-- ini switch halamannya -->

<?php
	error_reporting(0); 
	switch ($_GET['page']) {
		
		default:
			include 'content/beranda.php';
			break;
		case 'beranda':
			include 'content/beranda.php';
			break;
		case 'berita':
			include 'content/berita.php';
			break;
		case 'teknologi':
			include 'content/teknologi.php';
			break;

		case 'daftar':
			include 'content/daftar_asrama.php';
			break;

		case 'tabel':
			include 'content/tabel.php';
			break;

		case 'login':
			include 'content/login.php';
			break;

		case 'regis':
			include 'content/registrasi.php';
			break;

		case 'edit':
			include 'content/form_edit.php';
			break;

		case 'galery':
			include 'content/galery.php';
			break;

		
		
		
	}
?>





 	<!-- <footer style="background-color: black;padding: 10px;" class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer> -->

</div>
<!-- ini script untuk js -->
 <?php
 include'footer.php';
 ?>