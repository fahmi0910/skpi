<br>
<div class="container">
  <div class="row">
    <div class="col">
      <a href="<?= base_url() ?>management_organisasi/tambah_organisasi" class="btn btn-sm btn-info mb-3">Tambah Prodi</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nama Organisasi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($organisasi as $value): ?>
          <tr>
            <td><?= $value->nama ?></td>
            <td>
             <div class="dropdown _action">
               <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                 <i class="fa fa-cog"></i>
               </button>
               <div class="dropdown-menu">
                <li class="dropdown-item">
                  <a class="btn-block" href="<?= base_url() ?>management_organisasi/edit/<?= $value->id ?>"> Edit</a>
                </li>
                <li class="dropdown-item">
                  <a class="btn-block" onclick="return confirm('Yakin Mau Hapus?')"
                  href="<?= base_url() ?>management_organisasi/hapus_organisasi/<?= $value->id ?>"> Hapus</a>
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
