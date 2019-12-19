
  <div class="container">
    <div>
      <div class="card-header">Tambah User</div>
      <div class="card-body">
        <form action="../config/p_tambahuser.php" method="post" enctype="multipart/form-data">
          
          <div class="form-group">
          <label for="exampleInputPassword2">Foto</label>
            <input type="file"  name="file" class="file-upload-browse btn btn-info" value="Upload Foto">   
         </div>
         <div class="form-group">
              <div class="col-md-6">
                <label for="exampleInputLastName">Nama depan</label>
                <input class="form-control" name="nama_depan" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
          </div>
          <div class="form-group">
              <div class="col-md-6">
                <label for="exampleInputLastName">Nama Belakang</label>
                <input class="form-control" name="nama_belakang" id="exampleInputLastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input class="form-control" name="email" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">NO HP </label>
            <input class="form-control" name="no_hp" id="exampleInputEmail1" type="number" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="password" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>
         
         
          </div>
          <input type="submit" name="upload"  class="btn btn-primary" value="Upload">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
