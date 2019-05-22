<div class="container">
<div class="mt-3">
		<h1>Edit Data Prestasi</h1>
	</div>
	<div class="mt-3">
		<form action="<?php echo base_url(); ?>C_prestasi/update_p/<?php echo $edit_p->no; ?>" method="post" enctype="multipart/form-data">
		<!-- <input type="hidden" name="editbukti" value="<?php echo $edit_p->bukti; ?>"> -->
			<div class="form-group row">
				<label for="inputPrestasi" class="col-sm-2 col-form-label">Pestasi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="prestasi" value= "<?php echo $edit_p->prestasi; ?>"required>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputWaktu" class="col-sm-2 col-form-label">Waktu</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="waktu" value= "<?php echo $edit_p->waktu; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPenyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="penyelenggara" value= "<?php echo $edit_p->penyelenggara; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputAtas_nama" class="col-sm-2 col-form-label">Atas Nama Pribadi/Instansi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="atas_nama" value= "<?php echo $edit_p->atas_nama; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputBukti" class="col-sm-2 col-form-label">Bukti</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="bukti" id="inputBukti" >
				</div>
				<?php
                        if ($edit_p->bukti<>'') {
                            echo '<img src="'.base_url().'assets/upload/'.$edit_p->bukti.'" style="height:100px;margin-left:230px;margin-top:30px">';
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
