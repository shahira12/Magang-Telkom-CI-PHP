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

  <title>Telkom Network Area Pasar Baru</title>
</head>

<body>
    <div class="main">
        <div class="container">
        <center>
            <div class="middle">
                <div id="login">
                    <?php
                        echo form_open("auth/AksiLogin", array("class"=>"form-signin"));?>
                    <br>
                    <!--form login-->
                    <fieldset class="clearfix">
                        <p ><span class="fa fa-user"></span><input type="text"  name="username" id="inputusername" class="form-control" Placeholder="Nama Pengguna" required></p> 

                        <p><span class="fa fa-lock"></span><input type="password" name="password" id="inputPassword" class="form-control"   Placeholder="Kata Sandi" required></p> 

                        <div>
                            <span style="width:48%; text-align:left;  display: inline-block; color: white;"><a class="small-text" href="<?php echo base_url('index.php/forgotpassword/FormEditPassword/')?>">Lupa Kata Sandi?</a></span>
                            <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Masuk"></span>
                        </div>
                    </fieldset>
                    <div class="clearfix"></div>
                    <div class="clearfix"></div>
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