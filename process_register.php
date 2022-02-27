<?php
error_reporting(0);
$nik = $_POST['nik'];
$nama_lengkap =$_POST['nama_lengkap'];

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

