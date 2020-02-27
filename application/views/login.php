<link href="<?php echo base_url('assets/bootstrap/js/bootstrap.min.css') ?>" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/login.css">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Halaman Login Pengelola Tabungan. <br> SD Unggulan Kuningan</h3>
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?=site_url('Auth/prosess')?>" method="post">
                            <h3 class="text-center text-info">Silahkan Masukan Username dan Password</h3>
                                <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                                </div>
                             <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="login" class="btn btn-info btn-md" value="login">
                                </div>
                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
