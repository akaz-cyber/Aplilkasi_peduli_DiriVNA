<h4 class="page-title">Catatan Perjalanan</h4>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="user.php">Beranda</a></li>
	<li class="breadcrumb-item active" aria-current="page">Edit Catatan</li>
</ol>
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Catatan</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                      $data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
                      $user = $_SESSION['nik']."|".$_SESSION['nama_lengkap'];
                   foreach($data as $value){
                       $a =explode("|",$value);
                       @$b =$a['1']."|".$a['2'];
                       if($b==$user){

                    ?>
                    <tr>
                        <td><?= $a['3'];?></td>
                        <td><?= $a['4'];?></td>
                        <td><?= $a['5'];?></td>
                        <td><?= $a['6'];?> &#8451</td>
                        <td>
                       <a href="?url=edit_catatan&id_catatan=<?= $a['0']?>"class="btn btn-outline-primary waves-effect waves-light m-1">
                       <i class="fa fa-edit"></i> </a>
                       <a href="delete.php?id_catatan=<?= $a['0']?>"id="btn-hapus" class="btn btn-outline-danger waves-effect waves-light m-1">
                       <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                    <?php }} ?>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->