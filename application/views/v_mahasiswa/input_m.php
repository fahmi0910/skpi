<div class="mt-3">
	<h2> Silahkan Masukkan Data Diri Anda</h1>
		<div class="container">
			<div class="mt-3">
			<form action="<?php echo base_url(); ?>C_mahasiswa/simpan_data_diri" method="post" >
				<div class="form-group row">
				 <label for="inputnama" class="col-sm-2 ">Nama </label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap anda" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputtl" class="col-sm-2">Tempat, Tanggal Lahir</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" name="ttl" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputnim" class="col-sm-2">NIM</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="nim" placeholder="eg : 2016.1234.11.1111" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputnsi" class="col-sm-2">No Ijazah</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="nsi" placeholder="Masukkan nomer seri ijazah anda" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputmasuk" class="col-sm-2">Tanggal Masuk</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" name="masuk"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputlulus" class="col-sm-2">Tanggal Lulus</label>
		   		 <div class="col-sm-10">
		   		 	<input type="date" class="form-control" name="lulus"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputgelar" class="col-sm-2">Gelar dan Singkatan</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="gelar" placeholder="eg : Sarjana Komputer (S.Kom)"  required>
		   		 </div>	
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" name="submit" value="kirim">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>