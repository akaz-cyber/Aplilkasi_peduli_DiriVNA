<?php
error_reporting(0);
$nik = $_POST['nik'];
$nama_lengkap =$_POST['nama_lengkap'];
if (strlen($nik) < 16) {
  echo "<script>
  alert('Nik tidak boleh kurang dari 16 angka!!');
  window.location.assign('register.php'); 
</script>";die;
}else if (strlen($nik)>16){
  echo "<script>
  alert('Nik tidak boleh lebih dari 16 angka!!');
  window.location.assign('register.php');
 </script>";die;
} //validsai nik agar 16 huruf

//mengcek nik apakah sudah terproses
$data = file("config.txt",FILE_IGNORE_NEW_LINES); // menjadikan file config.txt ini menjadi array
foreach($data as $value){
    $p = explode("|",$value);
    if($nik==$p['0']){
        $c = true;
     }
}

if($c){ //jika nik terdaftar ?>
  <script type="text/javascript">
      alert('Maaf Nik yang anda gunakan sudah terdaftar!!');
      window.location.assign('register.php');
  </script>
<?php }else{//jika data tidak temukan
  $format = "\n$nik|$nama_lengkap";

  $file = fopen('config.txt','a');
  fwrite($file, $format);

  fclose($file);
  ?>
 <script type="text/javascript">
      alert('Pendaftaran Suksess!!');
      window.location.assign('index.php');
</script>  
<?php

}

