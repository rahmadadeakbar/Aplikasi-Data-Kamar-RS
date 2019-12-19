<?php
include'koneksidb.php';

if (isset($_POST['upload'])){

	
   
    $ekstensi_boleh = array('png','jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.',$nama);
    $ekstensi=strtolower(end($x));
    $ukuran =$_FILES['file']['size'];
    $tmp = $_FILES['file']['tmp_name'];
    $depan = $_POST['nama_depan'];
    $belakang =$_POST['nama_belakang'];
    $email = $_POST['email'];
    $nohp = $_POST['no_hp'];
    $pass =md5($_POST['password']);

    
if(in_array($ekstensi,$ekstensi_boleh) === true){
    if($ukuran<1044070){

        move_uploaded_file($tmp,'gambar/'.$nama);
        $query=mysqli_query($koneksi,"insert into user values(null,'$nama','$depan','$belakang','$email','$nohp','$pass')");

        if($query){
            echo'data berhasil di input';
        }
        else {
            echo'gagal upload';
        }
    }
}

   
	

	
}


?>