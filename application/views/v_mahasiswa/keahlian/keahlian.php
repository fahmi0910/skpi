<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Sertifikat Keahlian</h2></div>
            </div>
        </div>
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Waktu Kegiatan</th>
                    <th>Penyelenggara</th>
                    <th>Ruang Lingkup Keahlian</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                            $n = 1 + $this->uri->segment(3);
                            if($kirim_keahlian > 0)
                            {
                                foreach($data_keahlian as $b)
                                {
                                        $bukti = str_replace(" ", "_", $b->bukti);
                                        echo '<tr>
                                                <td scope="row">'.$n.'</td>
                                                <td>'.$b->nama.'</td>
                                                <td>'.$b->waktu.'</td>
                                                <td>'.$b->penyelenggara.'</td>
                                                <td>'.$b->ruang.'</td>
                                                <td><img height="50px" src="'.base_url().'assets/upload/'.$bukti.'"></td>
                                                <td> <a class="btn btn-primary" href ="'.base_url().'C_keahlian/edit/'.$b->no.'">Edit</a> <button class="btn btn-danger" data-toggle="modal" data-target="#modalkeahlian" data-id="'.$b->no.'" class="hapus">Hapus</button></td>
                                            </tr>';
                                        $n++;
                                }
                            }
                            else
                            {
                                    echo '<tr><td colspan="6" align="center" style="color:red">Maaf Data Tidak ditemukan</td></tr>';
                            }
                    ?>      
            </tbody>            
        </table>
        <div>
            <a class="btn btn-primary" href="<?php echo base_url();?>C_keahlian/input" role="button">Tambah</a>
        </div>
    </div>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="modalkeahlian" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
 
                       