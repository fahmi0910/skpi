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
                   <?php
                        foreach($ambil_data->result_array() as $i):
                            $nama=$i['nama'];
                            $ttl=$i['ttl'];
                            $nim=$i['nim'];
                            $nsi=$i['no_ijazah'];
                            $masuk=$i['masuk'];
                            $lulus=$i['lulus'];
                            $gelar=$i['gelar'];
                       
                        
                    ?>
                    <tr>
                        <td><?php echo $nama; ?></td>
                        <td><?php echo $ttl; ?></td>
                        <td><?php echo $nim; ?></td>
                        <td><?php echo $nsi; ?></td>
                        <td><?php echo $masuk; ?></td>
                        <td><?php echo $lulus; ?></td>
                        <td><?php echo $gelar; ?></td>
                        <td>
                        <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        </a>
                    </td>

                    </tr>
                      <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <a class="btn btn-info" href="<?php echo base_url();?>C_mahasiswa/input_m" role="button">Edit</a>
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
                       