<div class="container">
	<div class="mt-3">
		<h1>Edit Data Seminar</h1>
	</div>
	<div class="mt-3">
		<form action="<?php echo base_url(); ?>C_seminar/update_s/<?php echo $edit_s->no; ?>" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="inputpnama" class="col-sm-2 col-form-label">Nama Kegiatan</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nama" value= "<?php echo $edit_s->nama; ?>"required>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputwaktu" class="col-sm-2 col-form-label">Waktu</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" name="waktu" value= "<?php echo $edit_s->waktu; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputpenyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="penyelenggara" value= "<?php echo $edit_s->penyelenggara; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputatas_nama" class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="status" value= "<?php echo $edit_s->status; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputbukti" class="col-sm-2 col-form-label">Bukti</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="bukti" id="inputbukti" >
				</div>
				<?php
                        if ($edit_s->bukti<>'') {
                            echo '<img src="'.base_url().'assets/upload/'.$edit_s->bukti.'" style="height:100px;margin-left:230px;margin-top:30px">';
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
