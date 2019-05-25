<br>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>management_prodi/tambah_prodi" class="btn btn-sm btn-info mb-3">Tambah Prodi</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Perguruan Tinggi</th>
            <th>Program Studi</th>
            <th>Jenis</th>
            <th>Jenjang Kualifikasi</th>
            <th>Akreditasi</th>
            <th>Lama Studi</th>
            <th>System</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($prodi as $value): ?>
          <tr>
            <td><?= $value->nama ?></td>
            <td><?= $value->prodi ?></td>
            <td><?= $value->jenis_lanjutan ?></td>
            <td><?= $value->jenjang ?></td>
            <td><?= $value->akreditasi ?></td>
            <td><?= $value->lama_studi ?></td>
            <td><?= $value->sistem_penilaian ?></td>
            <td>
             <div class="dropdown _action">
               <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-cog"></i>
               </button>
               <div class="dropdown-menu">
                <li class="dropdown-item">
                  <a class="btn-block" href="<?= base_url() ?>management_prodi/edit/<?= $value->id ?>"> Edit</a>
                </li>
                <li class="dropdown-item">
                  <a class="btn-block" onclick="return confirm('Yakin Mau Hapus?')"
                  href="<?= base_url() ?>management_prodi/hapus_prodi/<?= $value->id ?>"> Hapus</a>
                </li>
               </ul>
             </div>
            </td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
