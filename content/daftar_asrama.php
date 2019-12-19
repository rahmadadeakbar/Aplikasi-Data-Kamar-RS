<div class="preloader">
      <div class="loading">
        <img src="gambar/form.gif" width="200">
      </div>
 </div>

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

    <form action="config/prosesinput.php" method="post">
	  <div class="form-group">
	    <label for="formGroupExampleInput">Nama Tukang</label>
	    <input type="text" name="nama_tukang" class="form-control" id="formGroupExampleInput" placeholder="Example input">
	  </div>

		<div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select class="form-control" name="jk" id="exampleFormControlSelect1">
      <option>Laki-Laki</option>
      <option>Perempuan</option>
    </select>
 	 </div>

		<div class="form-group">
	    <label for="formGroupExampleInput2">Alamat</label>
	    <input type="text" name="alamat" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <div class="form-group">
	    <label for="formGroupExampleInput2">Bidang</label>
	    <input type="text" name="bidang" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

		<div class="form-group">
	    <label for="formGroupExampleInput2">Jabatan</label>
	    <input type="text" name="jabatan" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	  <div class="form-group">
	    <label for="formGroupExampleInput2">No HP</label>
	    <input type="text" name="no_hp"  class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

	   <div class="form-group">
	    <label for="formGroupExampleInput2">Updah Harian</label>
	    <input type="text" name="upah_harian" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
	  </div>

		<div class="form-group">
	    <label for="formGroupExampleInput">NIK</label>
	    <input type="text" name="nik" class="form-control" id="formGroupExampleInput" placeholder="Example input">
	  </div>

	   <button type="submit" name="tambah"  class="btn btn-primary">Tambah</button>
	</form>
  </div>
  
</div>
</div>