<div class="container">
	<div class="mt-3">
		<h1>Edit Data Organisasi yang di ikuti</h1>
	</div>
	<div class="mt-3">
		<form action="<?php echo base_url(); ?>C_dm/update_organisasi/<?= $edit_o->id ?>" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="inputpnama" class="col-sm-2 col-form-label">Nama Organisasi</label>
				<div class="col-sm-10">
					<select name="id_organisasi" class="form-control">
                        <?php foreach ($organisasis as $organisasi): ?>
                            <option value="<?= $organisasi->id ?>" 
                            	<?= $organisasi->id == $edit_o->id_organisasi ? 'selected' : '' ?>>
                                <?= $organisasi->nama ?>
                            </option>
                        <?php endforeach ?>
                    </select>
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPeriode" class="col-sm-2 col-form-label">Masa Jabatan/Periode</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="periode" value= "<?php echo $edit_o->periode; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputDivisi" class="col-sm-2 col-form-label">Divisi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="divisi" value= "<?php echo $edit_o->divisi; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputBerkas" class="col-sm-2 col-form-label">Berkas</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="berkas" value= "<?php echo $edit_o->berkas; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputBukti" class="col-sm-2 col-form-label">Bukti</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="bukti" id="inputbukti" >
				</div>
				<?php
                        if ($edit_o->bukti<>'') {
                            echo '<img src="'.base_url().'assets/upload/'.$edit_o->bukti.'" style="height:100px;margin-left:230px;margin-top:30px">';
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
