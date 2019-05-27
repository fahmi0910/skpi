<div class="container">
	<div class="mt-3">
		<h1>Silahkan Masukkan Data Publikasi Karya_Ilmiah Anda</h1>
	</div>
	<div class="mt-3">
		<form action="<?php echo base_url(); ?>C_dm/update_karya_ilmiah/<?= $edit->no ?>" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="inputpnama" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="judul" value= "<?php echo $edit->judul; ?>"required>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputTerbit" class="col-sm-2">Terbit</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="terbit" value= "<?php echo $edit->terbit; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPenyelenggara" class="col-sm-2">Penyelenggara</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="penyelenggara" value= "<?php echo $edit->penyelenggara; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputStatus" class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="status" value= "<?php echo $edit->status; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputBukti" class="col-sm-2 col-form-label">Bukti</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="bukti" id="inputbukti" >
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
