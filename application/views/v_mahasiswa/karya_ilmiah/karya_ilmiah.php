<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Publikasi Karya_Ilmiah</h2></div>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Terbit</th>
                    <th>Penyelenggara</th>
                    <th>Status</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_karya_ilmiah as $index => $value): ?>
                    <tr>
                        <td><?= ++$index ?></td>
                        <td><?= $value->judul ?></td>
                        <td><?= $value->terbit ?></td>
                        <td><?= $value->penyelenggara ?></td>
                        <td><?= $value->status ?></td>
                        <td><img height="50px" src="<?= base_url().'assets/upload/'.$value->bukti ?>"></td>
                        <td>
                        <div class="dropdown _action">
                          <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                          </button>
                          <div class="dropdown-menu">
                            <li class="dropdown-item">
                              <a class="btn-block" href="<?= base_url() ?>C_karya_ilmiah/edit/<?= $value->no ?>"> Edit</a>
                            </li>
                            <li class="dropdown-item">
                              <a class="btn-block" onclick="return confirm('Yakin Mau Hapus?')"
                              href="<?= base_url() ?>C_karya_ilmiah/hapus/<?= $value->no ?>"> Hapus</a>
                            </li>
                          </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>            
        </table>
        <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>C_karya_ilmiah/input" role="button">Tambah</a>
        </div>
    </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalkarya_ilmiah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Anda Yakin Ingin menghapus data ini ?
          </div>
          <div class="modal-footer">
            <a role="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
            <a  class="btn btn-danger" role="button" href ="<?php base_url()?>hapus">OK</a>
          </div>
        </div>
      </div>
    </div>     
 
                       
