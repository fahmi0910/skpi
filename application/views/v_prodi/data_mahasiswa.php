<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Informasi Identitas Diri Pemegang SKPI</h2></div>
                
            </div>
        </div>
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>                
                   <?php
                        foreach($ambil_data->result_array() as $i):
                            $nim=$i['nim'];
                            $nama=$i['nama'];
                            $status=$i['status'];
                    ?>
                    <tr>
                        <td><?php echo $nim; ?></td>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><a class="btn btn-primary" href="#">ambil</a></td>
                    </tr>
                      <?php endforeach;?>
            </tbody>
        </table>
</div>  