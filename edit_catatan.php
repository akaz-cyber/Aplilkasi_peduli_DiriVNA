<h4 class="page-title">Catatan Perjalanan</h4>
	<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="user.php">Beranda</a></li>
	<li class="breadcrumb-item"><a href="user.php?url=perjalanan_edit">Edit Catatan</a></li>
	<li class="breadcrumb-item active" aria-current="page">Proses Edit</li>
</ol>
<div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Isi Catatan</div>
             <div class="card-body">
			 <?php
             $data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
             $id_catatan = $_GET['id_catatan'];
             foreach($data as $value){
             $a = explode('|',$value);
             if($a['0']==$id_catatan){
                 ?>
			 <form action="simpan_edit_catatan.php" method="POST">
			     <input type="hidden" name="id_catatan" value="<?= $a['0']; ?>">
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Tanggal</label>
				  <div class="col-sm-9">
					<input value="<?= $a['3']; ?>" name="tanggal" type="date" id="basic-input" class="form-control" placeholder="Masukan Tanggal" required>
				  </div>
				</div>
				
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Jam</label>
				  <div class="col-sm-9">
					<input value="<?= $a['4']; ?>"  name="jam" type="time" id="basic-input" class="form-control" placeholder="Masukan Jam" required>
				  </div>
				</div>

                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Lokasi</label>
				  <div class="col-sm-9">
					<input  value="<?= $a['5']; ?>" name="lokasi" type="text" id="basic-input" class="form-control" placeholder="Masukan Lokasi" required>
				  </div>
				</div>

                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Suhu Tubuh</label>
				  <div class="col-sm-9">
					<input value="<?= $a['6']; ?>" name="suhu" type="text" id="basic-input" class="form-control" placeholder="Masukan Suhu Tubuh" required>
				  </div>
				</div>
				
            <div class="form-group text-right">
                <button type="submit" class="btn btn-info btn-lg btn-round waves-effect waves-light m-1">simpan</button>
            </div>
			 </form>
			 <?php } }?>
             </div>
          </div>
        </div>
      </div><!--End Row-->