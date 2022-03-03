<?php
session_start();
$nik          = $_SESSION['nik'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$tanggal      = $_POST['tanggal'];
$jam          = $_POST['jam'];
$lokasi       = $_POST['lokasi'];
$suhu   = $_POST['suhu'];
$id_catatan = $_POST['id_catatan'];

$format = "$id_catatan|$nik|$nama_lengkap|$tanggal|$jam|$lokasi|$suhu";

$no = 0;
$data =file('catatan.txt' ,FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $a = explode("|",$value);
    if($a['0']==$id_catatan){
        $baris = $no-1; //mencari urutan baris
    }
}

$data[$baris] = $format;
$data = implode("\n",$data);
FILE_put_contents('catatan.txt',$data);

?>
<script text="text/javascript">
    alert('Data Catatan SUDAH Diubah !!');
    window.location.assign('user.php?url=catatan_perjalanan');
</script>