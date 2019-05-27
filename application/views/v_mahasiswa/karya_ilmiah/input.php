<div class="mt-3">
    <h2 class="ml-5"> Silahkan Masukkan Data Publikasi Karya_Ilmiah Anda</h1>
        <div class="container">
            <div class="mt-3">
            <form action="<?php echo base_url(); ?>C_karya_ilmiah/simpan" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                 <label for="inputJudul" class="col-sm-2 ">Judul</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul"required>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputTerbit" class="col-sm-2">Terbit</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="terbit" required>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputPenyelenggara" class="col-sm-2">Penyelenggara</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="penyelenggara" placeholder="" required>
                 </div> 
                </div>
                <div class="form-group row">
                 <label for="inputStatus" class="col-sm-2">Status</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="status" placeholder="" required>
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
