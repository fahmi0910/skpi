<div class="mt-3">
  <div class="container">
    <h2> Silahkan Masuk Prodi</h2>
    <div class="mt3">
      <form action="<?= base_url() ?>management_organisasi/simpan_organisasi" method="POST">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
