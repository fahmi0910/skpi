<head>
<link  href="<?php echo base_url(); ?>assets/login/login.css" rel="stylesheet" >
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 <title>Login User SKPI</title>
<link rel="icon" href="<?php echo base_url(); ?>assets/login/images/unjaya.png">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
        <?php
            if($this->session->flashdata('pesan')=='')
            {
                $pesan = 'Silakan Masukkan Username dan password Anda';
                $tipe = 'class="alert alert-info"';
            }   
            else
            {
                $pesan = $this->session->flashdata('pesan');
                $tipe = 'class="alert alert-danger"';
            }
        ?>
        <div <?php echo $tipe; ?> role="alert" align="center">
             <?php echo $pesan; ?>
        </div>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url(); ?>assets/login/images/unjaya.png"
                    alt="">
                <form class="form-signin" method="post" action="<?php echo base_url();?>index.php/c_login/proses_login">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                
                <button class="btn btn-lg btn-primary btn-block" type="submit" value="LOGIN">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <!--<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
                </form>
            </div>
            <!--<a href="#" class="text-center new-account">Create an account </a>-->
        </div>
    </div>
</div>
</body>
