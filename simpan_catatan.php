<?php
session_start();
$nik          = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal      = $_POST['tanggal'];
$jam          = $_POST['jam'];
$lokasi       = $_POST['lokasi'];
$suhu   = $_POST['suhu'];
$id_catatan = rand(0,100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

//membuka file.txt
$file = fopen('catatan.txt','a');
fwrite($file,$format);

//menutup file 
fclose($file);
?>
<script text="text/javascript">
    alert('Data Catatan Tersimapan !!');
    window.location.assign('user.php?url=catatan_perjalanan');
</script>