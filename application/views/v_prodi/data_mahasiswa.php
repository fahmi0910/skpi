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
                <?php foreach ($ambil_data as $index => $value): ?>
                    <tr>
                        <td><?= $value->username ?></td>
                        <td><?= isset($value->nama) ? $value->nama : 'belum terisi' ?></td>
                        <td><?= isset($value->id_user) ? 'terisi': 'belum terisi' ?></td>
                        <td>
                            <a href="<?= base_url('c_dm/ambil/'.$value->id) ?>" class="btn btn-primary"> ambil</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</div>  
