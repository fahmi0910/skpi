<div class="mt-3">
  <div class="container">
    <h2> Silahkan Masukkan Prodi</h1>
    <div class="mt3">
      <form action="<?= base_url() ?>C_dm/update_prodi/<?= $prodi->id ?>" method="POST">
        <div class="form-group">
          <label for="izin">Izin Pendirian Perguruan Tinggi</label>
          <textarea name="izin" id="izin" class="form-control"><?= $prodi->izin ?></textarea>
        </div>
        <div class="form-group">
          <label for="nama">Nama Perguruan Tinggi</label>
          <input type="text" class="form-control" value="<?= $prodi->nama ?>" name="nama" id="nama">
        </div>
        <div class="form-group">
          <label for="prodi">Program Studi</label>
          <input type="text" class="form-control" value="<?= $prodi->prodi ?>" name="prodi" id="prodi">
        </div>
        <div class="form-group">
          <label for="jenis_dan_program">Jenis Dan Program Pendidikan</label>
          <input type="text" class="form-control" value="<?= $prodi->jenis_dan_program ?>" name="jenis_dan_program" id="jenis_dan_program">
        </div>
        <div class="form-group">
          <label for="jenjang">Jenjan Kualifikasi Sesuai KKNI</label>
          <input type="text" class="form-control" value="<?= $prodi->jenjang ?>" name="jenjang" id="jenjang">
        </div>
        <div class="form-group">
          <label for="persyaratan">Persyaratan Penerimaan</label>
          <textarea name="persyaratan" id="persyaratan" class="form-control"><?= $prodi->persyaratan ?></textarea>
        </div>
        <div class="form-group">
          <label for="sertifikat_akreditasi">Sertifikt Akreditasi</label>
          <textarea name="sertifikat_akreditasi" id="sertifikat_akreditasi" class="form-control" ><?= $prodi->sertifikat_akreditasi ?></textarea>
        </div>
        <div class="form-group">
          <label for="akreditasi">Nilai Akreditasi Program Studi</label>
          <input type="text" class="form-control" value="<?= $prodi->akreditasi ?>" name="akreditasi" id="akreditasi">
        </div>
        <div class="form-group">
          <label for="lama_studi">Lama Studi</label>
          <input type="text" class="form-control" value="<?= $prodi->lama_studi ?>" name="lama_studi" id="lama_studi">
        </div>
        <div class="form-group">
          <label for="bahasa">Bahasa Pengantar Kuliah</label>
          <input type="text" class="form-control" value="<?= $prodi->bahasa ?>" name="bahasa" id="bahasa">
        </div>
        <div class="form-group">
          <label for="sistem_penilaian">Sistem Penilaian</label>
          <input type="text" class="form-control" value="<?= $prodi->sistem_penilaian ?>" name="sistem_penilaian" id="sistem_penilaian">
        </div>
        <div class="form-group">
          <label for="jenis_lanjutan">Jenis Program Pendidikan Lanjutan</label>
          <input type="text" class="form-control" value="<?= $prodi->jenis_lanjutan ?>" name="jenis_lanjutan" id="jenis_lanjutan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
