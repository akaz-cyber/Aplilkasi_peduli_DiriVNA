<?php
error_reporting(0);
session_start();
$nik = $_POST['nik'];
$nama_lengkap =$_POST['nama_lengkap'];


if(strlen($nik) != 16){
 
  $_SESSION['error'] = 'Nik Tidak Valid';
  header("location: register.php"); die;
}

if(strlen($nama_lengkap) < 2){
  $_SESSION['error'] = 'Nama Lengkap tidak valid';
  header("location: register.php"); die;
}


//mengcek nik apakah sudah terproses
$data = file("config.txt",FILE_IGNORE_NEW_LINES); // menjadikan file config.txt ini menjadi array
foreach($data as $value){
    $p = explode("|",$value);
    if($nik==$p['0']){
        $c = true;
     }
}

if($c){ //jika nik terdaftar 
  $_SESSION['error'] = 'Maaf Nik Sudah Terdaftar!!';
  header("location: register.php"); 
?>
<?php }else{//jika data tidak temukan
  $format = "\n$nik|$nama_lengkap";

  $file = fopen('config.txt','a');
  fwrite($file, $format);

  fclose($file);
  $_SESSION['success'] = 'Pendaftaran berhasil';
  header("location: index.php");
  ?>

<?php

}

