<?php
session_start();
$year = $_POST['tanggal'];
$getOnlyear = date('Y', strtotime($year)); // TAHUN
$dateNow = date('Y');
if ($getOnlyear < $dateNow) {
$_SESSION['error'] = 'data Tahun Terlalu lampu '; //ini berfungsi jika validasi Tanggal Error akan menampilkan Tahun Tidak boleh Kurang 
header('Location: user.php?url=tulis_catatan');  //ini berfungsi agar setelah validasi tanggal salah akan di redirect ke halaman tulisan catatan
die;
}

$nik          = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal      = $_POST['tanggal'];
$jam          = $_POST['jam'];
$lokasi       = $_POST['lokasi'];
$suhu         = $_POST['suhu'];
$id_catatan   = rand(0,100000);

$format = "\n$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

//membuka file.txt
$file = fopen('catatan.txt','a');
fwrite($file,$format);

//menutup file 
fclose($file);
$_SESSION['success'] = 'Catatan berhasil di simpan';//jika catatan berhasil di simpan akan ada sweet alert seperti ini 
header('Location: user.php?url=catatan_perjalanan'); // ini berfungsi agar bisa redirect ke halaman catatatn perjalanan
?>