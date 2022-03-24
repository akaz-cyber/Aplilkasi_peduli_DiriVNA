<?php
session_start();
$id_catatan = $_GET['id_catatan'];
$no = 0;
$data =file('catatan.txt' ,FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $a = explode("|",$value);
    if($a['0']==$id_catatan){
        $baris = $no-1; //mencari urutan baris
    }
}

$open =file('catatan.txt');
 
unset($open[$baris]);
file_put_contents('catatan.txt',implode("",$open));


$_SESSION['success'] = 'Data Catatan Berhasil di hapus'; 
header('Location: user.php?url=catatan_perjalanan');
?>
<!-- <script text="text/javascript">
    alert('Data Catatan SUDAH Diubah !!');
    window.location.assign('user.php?url=catatan_perjalanan');
</script> -->