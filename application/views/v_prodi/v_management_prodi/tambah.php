<div class="mt-3">
  <div class="container">
    <h2> Silahkan Masukkan Prodi</h1>
    <div class="mt3">
      <form action="<?= base_url() ?>management_prodi/simpan_data_diri" method="POST">
        <div class="form-group">
          <label for="izin">Izin Pendirian Perguruan Tinggi</label>
          <textarea name="izin" id="izin" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="nama">Nama Perguruan Tinggi</label>
          <input type="text" class="form-control" required name="nama" id="nama">
        </div>
        <div class="form-group">
          <label for="prodi">Program Studi</label>
          <input type="text" class="form-control" required name="prodi" id="prodi">
        </div>
        <div class="form-group">
          <label for="jenis_dan_program">Jenis Dan Program Pendidikan</label>
          <input type="text" class="form-control" required name="jenis_dan_program" id="jenis_dan_program">
        </div>
        <div class="form-group">
          <label for="jenjang">Jenjan Kualifikasi Sesuai KKNI</label>
          <input type="text" class="form-control" required name="jenjang" id="jenjang">
        </div>
        <div class="form-group">
          <label for="persyaratan">Persyaratan Penerimaan</label>
          <textarea name="persyaratan" id="persyaratan" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="sertifikat_akreditasi">Sertifikt Akreditasi</label>
          <textarea name="sertifikat_akreditasi" id="sertifikat_akreditasi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
          <label for="akreditasi">Nilai Akreditasi Program Studi</label>
          <input type="text" class="form-control" required name="akreditasi" id="akreditasi">
        </div>
        <div class="form-group">
          <label for="lama_studi">Lama Studi</label>
          <input type="text" class="form-control" required name="lama_studi" id="lama_studi">
        </div>
        <div class="form-group">
          <label for="bahasa">Bahasa Pengantar Kuliah</label>
          <input type="text" class="form-control" required name="bahasa" id="bahasa">
        </div>
        <div class="form-group">
          <label for="sistem_penilaian">Sistem Penilaian</label>
          <input type="text" class="form-control" required name="sistem_penilaian" id="sistem_penilaian">
        </div>
        <div class="form-group">
          <label for="jenis_lanjutan">Jenis Program Pendidikan Lanjutan</label>
          <input type="text" class="form-control" required name="jenis_lanjutan" id="jenis_lanjutan">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
