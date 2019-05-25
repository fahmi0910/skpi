<div class="mt-3">
  <div class="container">
    <h2> Silahkan Masukkan Prodi</h1>
    <div class="mt3">
      <form action="<?= base_url() ?>management_organisasi/update_organisasi/<?= $organisasi->id ?>" method="POST">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" value="<?= $organisasi->nama ?>" name="nama" id="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
