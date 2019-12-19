<?php
  include'../config/koneksidb.php';
  include'header.php';
  include'isi/sidebar.php';
?>
  <!-- Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
    
      <?php
        include'isi/iconbox.php';
      ?>

      <!-- sintaq untuk switch case -->

      <?php
        error_reporting(0);
        switch ($_GET[page]) {

          default:
            include'isi/grafik.php';
            break;

          case 'grafik':
            include'isi/grafik.php';
            break;

            case 'tabel':
            include'isi/tables.php';
            break;

            case 'tukang':
            include'../content/tabel.php';
            break;
            
            case 'daftar':
            include'../content/daftar_asrama.php';
            break;

            case 'regis':
            include'isi/register.php';
            break;

            case 'lupapass':
            include'isi/forgetpass.php';
            break;
        
        }

      
      ?>


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Anda yakin ingin keluar?</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../content/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
<?php
include'footer.php';
?>