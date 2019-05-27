<div class="mt-3">
		<div class="container">
			<h2> Silahkan Masukkan Data Diri Anda</h1>
			<div class="mt-3">
			<form action="<?php echo base_url(); ?>C_dm/update_data_diri/<?= $data_diri->nim ?>" method="post" >
				<div class="form-group row">
				 <label for="inputnama" class="col-sm-2 ">Nama </label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" value="<?= $data_diri->nama ?>" name="nama" placeholder="Masukkan nama lengkap anda" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputtl" class="col-sm-2">Tempat, Tanggal Lahir</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" value="<?= $data_diri->ttl ?>" name="ttl" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputnim" class="col-sm-2">NIM</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" value="<?= $data_diri->nim ?>" name="nim" placeholder="eg : 2016.1234.11.1111" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputno_ijazah" class="col-sm-2">No Ijazah</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" value="<?= $data_diri->no_ijazah ?>" name="no_ijazah" placeholder="Masukkan nomer seri ijazah anda" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputmasuk" class="col-sm-2">Tanggal Masuk</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" value="<?= $data_diri->masuk ?>" name="masuk"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputlulus" class="col-sm-2">Tanggal Lulus</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" value="<?= $data_diri->lulus ?>" name="lulus"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputgelar" class="col-sm-2">Gelar dan Singkatan</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" value="<?= $data_diri->gelar ?>" name="gelar" placeholder="eg : Sarjana Komputer (S.Kom)"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputgelar" class="col-sm-2">Prodi</label>
		   		 <div class="col-sm-10">
		   		 	<select name="prodi_id" id="" class="form-control">
		   		 		<option value="0">Pilih Prodi</option>
		   		 		<?php foreach ($prodi as $value): ?>
		   		 			<option value="<?= $value->id ?>" <?= $data_diri->prodi_id == $value->id ? 'selected' : '' ?>><?= $value->prodi ?></option>
		   		 		<?php endforeach ?>
		   		 	</select>
		   		 </div>
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" >Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
