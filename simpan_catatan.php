<?php
session_start();
$nik          = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal      = $_POST['tanggal'];
$jam          = $_POST['jam'];
$lokasi       = $_POST['lokasi'];
$suhu   = $_POST['suhu'];

$format = "\n$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

//membuka file.txt
$file = fopen('catatan.txt','a');
fwrite($file,$format);

//menutup file 
fclose($file);
?>
<script text="text/javascript">
    alert('Data Catatan Tersimapan !!');
    window.location.assign('user.php');
</script>