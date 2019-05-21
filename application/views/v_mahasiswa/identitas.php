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
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Tempat, Tanggal,Lahir</th>
                    <th scope="col">Nomer Induk Mahasiswa</th>
                    <th scope="col">Nomer Seri Ijazah</th>
                    <th scope="col">Tanggal, Bulan, Tahun Masuk</th>
                    <th scope="col">Tanggal, Bulan, Tahun Lulus</th>
                    <th scope="col">Gelar dan Singkatan</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_diri as $value): ?>
                    
                    <tr>
                        <td><?= $value->nama; ?></td>
                        <td><?= $value->ttl; ?></td>
                        <td><?= $value->nim; ?></td>
                        <td><?= $value->no_ijazah; ?></td>
                        <td><?= $value->masuk; ?></td>
                        <td><?= $value->lulus; ?></td>
                        <td><?= $value->gelar; ?></td>
                        <td>
                        <div class="dropdown _action">
                          <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-cog"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <li class="dropdown-item">
                              <a class="btn-block" href="<?= base_url() ?>C_mahasiswa/edit/<?= $value->nim ?>"> Edit</a>
                            </li>
                            <li class="dropdown-item">
                              <a class="btn-block" onclick="return confirm('Yakin Mau Hapus?')"
                              href="<?= base_url() ?>C_mahasiswa/hapus_data_diri/<?= $value->nim ?>"> Hapus</a>
                            </li>
                          </ul>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <?php if (!$data_diri): ?>
      <a class="btn btn-info" href="<?php echo base_url();?>C_mahasiswa/input_m" role="button">Tambah</a>
    <?php endif ?>
    </div>
</div>
 <!-- Js table -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        
        // Add row on add button click
        $(document).on("click", ".add", function(){
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    empty = true;
                } else{
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if(!empty){
                input.each(function(){
                    $(this).parent("td").html($(this).val());
                });         
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }       
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){        
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });     
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
       
    });
    </script>   
                       
