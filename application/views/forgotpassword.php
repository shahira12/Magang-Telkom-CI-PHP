<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <title>TELKOM - PT. Telekomunikasi Indonesia Tbk</title>
</head>
    
<body>
    <div class="main">
        <div class="container">
        <center>
            <div class="middle">
                <div id="login">
                    <?php
                        echo form_open_multipart("forgotpassword/AksiEditPassword", array("class"=>"form-horizontal"));      
                            echo form_input(array("name"  => "email",
                                                  "class" => "form-control",
                                                  "placeholder" => "Email",
                                                  "type"  => "text"));
                            echo form_input(array("name"  => "password",
                                                  "class" => "form-control",
                                                  "placeholder" => "Kata Sandi Baru",
                                                  "type"  => "password"));
                            echo form_input(array("class" => "btn btn-success",
                                                  "type"  => "submit",
                                                  "value" => "Selesai"));
                    ?>
                    <span style="width:45%; text-align:right;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/auth')?>">Batal</a></span>
                </div> <!-- end login -->
                <div class="logo">
                    <img src="<?php echo base_url('assets/img/logo-white.png')?>" style="margin-left: 50px; width: 180px; height: 123px;">
                    <div class="clearfix"></div>
                </div>
            </div>
        </center>
        </div>
    </div>
</body>