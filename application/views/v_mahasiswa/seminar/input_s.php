<div class="mt-3">
	<h2 class="ml-5"> Silahkan Masukkan Data Kegiatan/ Seminar/ Workshop yang Pernah Anda Ikuti </h1>
		<div class="container">
			<div class="mt-3">
			<form action="<?php echo base_url(); ?>C_seminar/simpan_s" method="post" enctype="multipart/form-data">
				<div class="form-group row">
				 <label for="inputNama" class="col-sm-2 ">Nama Kegiatan </label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="nama"required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputWaktu" class="col-sm-2">Waktu Kegiatan</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="waktu" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputPenyelenggara" class="col-sm-2">Penyelenggara</label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="penyelenggara" placeholder="" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputStatus" class="col-sm-2">Status </label>
		   		 <div class="col-sm-10">
		   		 	<input type="text" class="form-control" name="status" required>
		   		 </div>	
				</div>
				<div class="form-group row">
				 <label for="inputBukti" class="col-sm-2">Bukti</label>
		   		 <div class="col-sm-10">
		   		 	<input type="file" class="form-control" name="bukti" required>
		   		 </div>	
				</div>
				<div class="form-group row">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" >Simpan</button>
						<button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
