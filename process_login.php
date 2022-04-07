<?php
session_start(); //untuk mengaktifkan $_session
$nik = $_POST['nik'];
$nama_lengkap =$_POST['nama_lengkap'];

$format ="$nik|$nama_lengkap";
$file = file('config.txt',FILE_IGNORE_NEW_LINES);

if(in_array($format,$file)){//mencati format yang ada di dalam TXT
       $_SESSION['nik'] = $nik;
       $_SESSION['nama_lengkap'] = $nama_lengkap;
       $_SESSION['success'] = 'Berhasil Login'; 
       header("location:user.php");
}else{//jika data tidak di temukan 

$_SESSION['error'] = 'Nik Atau Username Salah'; 
header('Location: index.php');
?>
<?php }
