

<div class="preloader">
      <div class="loading">
        <img src="gambar/punch.gif" width="500">
       
      </div>
    </div>
<br>


<div class="container-fluid">

<!-- <a href="index.php?page=daftar" class="btn btn-primary" role="button">+ Tambah data</a> -->
<br>
<br>
<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th >No</th>
      <th >Nama Kamar</th>
      <th >Total</th>
      <th >Tersedia</th>
      <th >Terisi</th>
      


    </tr>
  </thead>

  <!-- letak query untuk menampilkan isi tabel -->
    <?php 

        $kamar= mysqli_query($koneksi,"select * from stok_kamar") or die(mysqli_error());

        if(mysqli_num_rows($kamar)==0){

          echo "<tr>
                  <td>Data Tidak Ada!!!</td>
                </tr>";
        }else{

          $no=1;
          while ($b = mysqli_fetch_assoc($kamar)) {
            $query=mysqli_query($koneksi,"select * from kamar where id_kamar='".$b['id_kamar']."'");

            while ($k=mysqli_fetch_assoc($query)) {
              $nama_kamar=$k['nama_kamar'];
            }

         echo " <tbody>
                  <tr>
                    <td>".$no."</td>
                    <td>".$nama_kamar."</td>
                    <td>".$b['total']." kamar</td>
                    <td>".$b['tersedia']." kamar</td>
                    <td>".$b['terisi']." kamar</td>
                    
                   
                  </tr>          
                </tbody> ";   

          $no++;

          }
        }  



    ?>

  
  
  </table>
</div>
</div>

