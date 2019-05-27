<div class="mt-3">
    <h2 class="ml-5"> Silahkan Tambah Data Mahasiswa </h1>
        <div class="container">
            <div class="mt-3">
            <form action="<?php echo base_url(); ?>C_user_prodi/simpan" method="post">
                <div class="form-group row">
                 <label for="inputUsername" class="col-sm-2 ">Username</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="username"required>
                 </div> 
                </div>
                </div>
                <div class="form-group row">
                 <label for="inputPassword" class="col-sm-2">Password</label>
                 <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" required>
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
