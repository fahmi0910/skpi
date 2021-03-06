<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, Mahasiswa</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/login/images/unjaya.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/f_mahasiswa/css_mhs.css">
    <!-- code JS & css table -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">    
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#00633b" >
	  <a class="navbar-brand" href="<?php echo base_url(); ?>C_prodi/index"">
	    <img src="<?php echo base_url(); ?>assets/login/images/web_logo.png" width="241" height="76" class="d-inline-block align-top" alt="">
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item <?= $this->uri->segment(1) == 'C_prodi' ? 'active' : '' ?>">
	        <a class="nav-link" href="<?php echo base_url(); ?>C_prodi/index">Identitas Penyelenggara <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item <?= $this->uri->segment(1) == 'management_prodi' ? 'active' : '' ?>">
	        <a class="nav-link" href="<?php echo base_url(); ?>management_prodi/index">Management Prodi<span class="sr-only">(current)</span></a>
	      </li>
          <li class="nav-item <?= $this->uri->segment(1) == 'management_organisasi' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo base_url(); ?>management_organisasi/index">Management Organisasi<span class="sr-only">(current)</span></a>
          </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>C_prodi/kualifikasi">Kualifikasi dan Hasil</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>C_dm">Data Mahasiswa</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo base_url(); ?>C_login/logout">Logout</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	
		<?php $this->load->view($page) ?>
	
		<div>
			<footer class="page-footer font-small white">
			  <!-- Copyright -->
			  <div class="footer">© 2019 Copyright
			    
			  </div>
			  <!-- Copyright -->
		   </footer>
		<!-- Footer -->
		</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
  </body>
  
</html>
