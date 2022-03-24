<h4 class="page-title">Catatan Perjalanan</h4>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="user.php">Dashboard</a></li>
	<li class="breadcrumb-item active" aria-current="page">Catatan Perjalanan</li>
</ol>
<div class="row"> 
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Riwayat Catatan</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Suhu Tubuh</th>
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
                        <td>
                       <span><?= $a['6'];?>&#8451</span>   
                      </td>
                    </tr>
                    <?php }} ?>
                </tbody>  
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->