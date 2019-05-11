<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Kerja Praktik / Magang</h2></div>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Tempat Kerja Praktik / Magang</th>
                    <th>Waktu Kegiatan</th>
                    <th>Penyelenggara</th>
                    <th>Berkas Pendukung</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                            $n = 1 + $this->uri->segment(3);
                            if($kirim_magang > 0)
                            {
                                foreach($data_magang as $b)
                                {
                                        $bukti = str_replace(" ", "_", $b->bukti);
                                        echo '<tr>
                                                    <td scope="row">'.$n.'</td>
                                                    <td>'.$b->tempat.'</td>
                                                    <td>'.$b->waktu.'</td>
                                                    <td>'.$b->penyelenggara.'</td>
                                                    <td>'.$b->berkas.'</td>
                                                    <td><img height="50px" src="'.base_url().'assets/upload/'.$bukti.'"></td>
                                                    <td> <a class="btn btn-primary" href ="'.base_url().'C_magang/edit/'.$b->no.'">Edit</a> <button class="btn btn-danger" data-toggle="modal" data-target="#modalmagang" data-id="'.$b->no.'" class="hapus">Hapus</button></td>
                                                </tr>';
                                        $n++;
                                }
                            }
                            else
                            {
                                    echo '<tr><td colspan="7" text-align="center" style="color:red">Maaf Data Tidak ditemukan</td></tr>';
                            }
                    ?>      
            </tbody>            
        </table>
        <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>C_magang/input" role="button">Tambah</a>
        </div>
    </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalmagang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 
                       