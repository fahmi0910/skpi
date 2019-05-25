<div class="mt-3">
    <h2 class="ml-5"> Silahkan Masukkan Data Organisasi Anda</h1>
        <div class="container">
            <div class="mt-3">
            <form action="<?php echo base_url(); ?>C_organisasi/simpan_o" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                 <label for="inputOrganisasi" class="col-sm-2 ">Nama Organisasi </label>
                 <div class="col-sm-10">
                    <select name="id_organisasi" class="form-control">
                        <?php foreach ($organisasis as $organisasi): ?>
                            <option value="<?= $organisasi->id ?>">
                                <?= $organisasi->nama ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputPeriode" class="col-sm-2">Masa Bakti/Periode</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="periode" required>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputDivisi" class="col-sm-2">Divisi</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="divisi" placeholder="" required>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputBerkas" class="col-sm-2">Berkas</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="berkas" placeholder="" required>
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="button" onclick="history.back()" class="btn btn-danger">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
