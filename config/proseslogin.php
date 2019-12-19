<?php  
include'koneksidb.php';

$username=$_POST['nama_belakang'];
$pass=md5($_POST['password']);

$cek =mysqli_query($koneksi,"select * from user where nama_belakang='$username' and password='$pass'");

$hasil =mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);

if($hasil>0){
    if($data['level']=='admin'){
        session_start();
        $_SESSION['nama_belakang'] =$data['nama_belakang'];
        $_SESSION['level']=$data['level'];
        $_SESSION['status']="login";
        echo"<script>alert('Selamat datang pak admin'); document.location.href=\"../admin/index.php\"</script>";

    }
} elseif ($data['level']=='user') {
        session_start();
        $_SESSION['nama_belakang'] =$data['nama_belakang'];
        $_SESSION['level']=$data['level'];
        $_SESSION['status']="login";
        echo"<script>alert('Selamat datang user'); document.location.href=\"../user/index.php\"</script>";
}




?>