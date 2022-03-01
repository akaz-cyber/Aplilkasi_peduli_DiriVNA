<div class="row">
        <div class="col-lg-12">
          <div class="card">
             <div class="card-header text-uppercase">Isi Catatan</div>
             <div class="card-body">
			 
			 <form action="simpan_catatan.php" method="POST">
			 
			    <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Tanggal</label>
				  <div class="col-sm-9">
					<input name="tanggal" type="date" id="basic-input" class="form-control" placeholder="Masukan Tanggal" required>
				  </div>
				</div>
				
                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Jam</label>
				  <div class="col-sm-9">
					<input name="jam" type="time" id="basic-input" class="form-control" placeholder="Masukan Jam" required>
				  </div>
				</div>

                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Lokasi</label>
				  <div class="col-sm-9">
					<input name="lokasi" type="text" id="basic-input" class="form-control" placeholder="Masukan Lokasi" required>
				  </div>
				</div>

                <div class="form-group row">
				  <label for="basic-input" class="col-sm-3 col-form-label">Suhu Tubuh</label>
				  <div class="col-sm-9">
					<input name="suhu" type="text" id="basic-input" class="form-control" placeholder="Masukan Suhu Tubuh" require>
				  </div>
				</div>
				
            <div class="form-group text-right">
                <button type="submit" class="btn btn-info btn-lg btn-round waves-effect waves-light m-1">simpan</button>
            </div>
			 </form>
			 
             </div>
          </div>
        </div>
      </div><!--End Row-->