<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>no</th>
                  <th>Foto</th>
                  <th>Nama Depan</th>
                  <th>Nama Belakang</th>
                  <th>Email</th>
                  <th>No Hp</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <?php 

                $query= mysqli_query($koneksi,"select * from user") or die(mysqli_error());

                if(mysqli_num_rows($query)==0){

                  echo "<tr>
                          <td>Data Tidak Ada!!!</td>
                        </tr>";
                }else{

                  $no=1;
                  while ($data = mysqli_fetch_assoc($query)) {

                echo " <tbody>
                          <tr>
                            <td>".$no."</td>
                            <td><img width='100px' height='100px' src='../config/gambar/".$data['nama_file']."'></td>
                            <td>".$data['nama_depan']."</td>
                            <td>".$data['nama_belakang']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['no_hp']."</td>
                            <td>
                            <a href='#' class='btn btn-primary' role='button'>detail</a>
                            <a href='index.php?page=edit&id='".$data['id_tukang']."' class='btn btn-success' role='button'>Update</a>
                            <a href='config/hapus.php?id=".$data['id_tukang']."' class='btn btn-danger' role='button' onclick=\"return confirm('Apakah anda Yakin ingin menghapus')\">delete</a>
                            </td>
                          </tr>          
                        </tbody> ";   

                  $no++;

                  }
                }  



                ?>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>