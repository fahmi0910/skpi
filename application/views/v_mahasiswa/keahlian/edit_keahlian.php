<div class="container">	
	<div class="mt-3">
		<h1>Edit Data Sertifikat Keahlian</h1>
	</div>
	<div class="mt-3">
		<form action="<?php echo base_url(); ?>C_keahlian/update/<?= $edit->no ?>" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="inputNama" class="col-sm-2 col-form-label">Keahlian</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value= "<?php echo $edit->nama; ?>"required>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputWaktu" class="col-sm-2 col-form-label">Waktu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="waktu" value= "<?php echo $edit->waktu; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPenyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="penyelenggara" value= "<?php echo $edit->penyelenggara; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputRuang" class="col-sm-2 col-form-label">Ruang Lingkup Keahlian</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="ruang" value= "<?php echo $edit->ruang; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputBukti" class="col-sm-2 col-form-label">Bukti</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="bukti" id="inputBukti" >
				</div>
				<?php
                        if ($edit->bukti<>'') {
                            echo '<img src="'.base_url().'assets/upload/'.$edit->bukti.'" style="height:100px;margin-left:230px;margin-top:30px">';
                        } else {
                            echo '<p style="color:red;font-weight:bold;margin-left:230px;margin-top:50px;">Belum Ada file</p>';
                        }
                 ?>
			</div>
			<div class="form-group row">
				<div class="col-sm-10"><div class="col-sm-10">
					<button type="submit" class="btn btn-primary">Update</button>
					<button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
				</div>
			</div>
		</form>
	</div>
</div>
