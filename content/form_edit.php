

<!-- <div class="preloader">
      <div class="loading">
        <img src="gambar/form.gif" width="200">
      </div>
 </div> -->

<br>
<div class="container">
<div class="card text-left">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="#">Form Daftar Asrama</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Form Biodata</a>
      </li>
    </ul>
  </div>
  <div class="card-body">

  	<?php

  	include '../config/koneksidb.php';

		 $id = $_GET['id'];



		 $show= mysqli_query($koneksi,"select * from data_tukang where id_tukang='$id'");

		 if(mysqli_num_rows($show)== 0){
			 
				echo'<script>windows.history.back()</script>';
		 } else{
			 $data = mysqli_fetch_assoc($show);
		 }

	?>

    <form action="../config/prosesedit.php" method="post">

			<input type="hidden" name="id" value="<?php echo $id; ?>">

	  <div class="form-group">
	    <label for="formGroupExampleInput">Nama Tukang</label>
	    <input type="text" name="nama_tukang" value="<?php echo $data['nama_tukang']?>" class="form-control" id="formGroupExampleInput" placeholder="Example input">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput">NIK</label>
	    <input type="text" name="no_nik"  value="<?php echo $data['no_nik'];?>" class="form-control" id="formGroupExampleInput" placeholder="Example input">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput2">Jenis Kelamin</label>
	    <input type="text" name="jk"  value="<?php echo $data['jk'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <div class="form-group">
	    <label for="formGroupExampleInput2">Alamat</label>
	    <input type="text" name="alamat"  value="<?php echo $data['alamat'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <div class="form-group">
	    <label for="formGroupExampleInput2">Bidang</label>
	    <input type="text" name="bidang"  value="<?php echo $data['bidang'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

		<div class="form-group">
	    <label for="formGroupExampleInput2">Jabatan</label>
	    <input type="text" name="jabatan"  value="<?php echo $data['jabatan'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput2">No HP</label>
	    <input type="text" name="no_hp"  value="<?php echo $data['no_hp'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <div class="form-group">
	    <label for="formGroupExampleInput2">Updah Harian</label>
	    <input type="text" name="upah_harian"  value="<?php echo $data['upah_harian'];?>" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <button type="submit" name="ubah"  class="btn btn-primary">Ubah</button>
	</form>
  </div>
  
</div>
</div>

