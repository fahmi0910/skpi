<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>User Mahasiswa</h2></div>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($data as $index => $value): ?>
                <tr>
                    <td><?php echo ++$index ?></td>
                    <td><?php echo $value->username ?></td>
                    <td><?php echo $value->password ?></td>
                    <td><?php echo $value->level ?></td>
                    <td><?php echo $value->nama ?></td>
                </tr>
                    <?php endforeach ?>
            </tbody>           
        </table>
        <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>C_sistem/input" role="button">Tambah</a>
        </div>
    </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalPrestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <a  class="btn btn-danger" role="button" href ="<?php base_url()?>hapus_p">OK</a>
          </div>
        </div>
      </div>
    </div>     
 
                       