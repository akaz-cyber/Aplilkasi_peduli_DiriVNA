<?php
session_start();
$year = $_POST['tanggal'];
$getOnlyear = date('Y', strtotime($year)); // TAHUN
$dateNow = date('Y');
if ($getOnlyear < $dateNow) {
    echo "
    <script>
    alert('Tahun tidak boleh kurang ');
    window.location.assign('user.php?url=tulis_catatan');
    </script>
    ";
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
?>
<script text="text/javascript">
    alert('Data Catatan Tersimpan !!');
    window.location.assign('user.php?url=catatan_perjalanan');
</script>