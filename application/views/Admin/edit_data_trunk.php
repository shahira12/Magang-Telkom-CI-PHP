<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Telkom Network Area Pasar Baru</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/demo.css">

    <!-- Animation library for notifications   -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sass/light-bootstrap-dashboard.scss">

    <!--  Light Bootstrap Table core CSS    -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/light-bootstrap-dashboard.css"/>
    
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300'>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css"/>

    <!--  JQuery Slide and Show/Hidden    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div class="wrapper">
    
    <!--  SIDEBAR    -->
    <?php require("application/include/sidebar2.php"); ?>

    <div class="main-panel">
        <!--  HEADER    -->
        <?php require("application/include/header.php"); ?>

        <!-- Content Was Here -->
        <div class="content">
            <div class="container-fluid">
                    <h2>SUNTING DATA</h2><br>
                    <center>
                    <?php
                        echo form_open_multipart ("admin/AksiEditTrunk", array("class"=>"form-horizontal"));
                           foreach ($data_trunk as $x) {
                            echo form_input(array("name"  => "lokasi",
                                                  "class" => "form-control",
                                                   "value" => $x->lokasi,
                                                  "placeholder" => "Ruas/Trunk",
                                                  "type"  => "text",
                                                  "readonly" => "true"));

                            echo form_input(array("name"  => "node_asal",
                                                  "class" => "form-control",
                                                   "value" => $x->node_asal,
                                                  "placeholder" => "Node Asal",
                                                  "type"  => "text"));

                            echo form_input(array("name"  => "node_tujuan",
                                                  "class" => "form-control",
                                                   "value" => $x->node_tujuan,
                                                  "placeholder" => "Node Tujuan",
                                                  "type"  => "text"));

                            echo form_input(array("name"  => "bandwidth",
                                                  "class" => "form-control",
                                                   "value" => $x->bandwidth,
                                                  "placeholder" => "Bandwidth",
                                                  "type"  => "text"));

                            echo form_input(array("name"  => "id",                             
                                                   "value" => $x->id,                             
                                                   "type"  => "hidden"));
                            echo form_input(array("class" => "btn btn-success",
                                                  "type"  => "submit",
                                                  "value" => "Simpan"));
                        }
                    ?>
                    <span style="width:10%; text-align:right;  display: inline-block;"><a class="small-text" href="<?php echo base_url('index.php/admin/data_trunk')?>">Batal</a></span>
                    </center>
                </div>
            </div>
        </div>
        <!-- Content Was Here -->

        <!--  FOOTER    -->
        <?php require("application/include/footer.php"); ?>


    </div>
</div>


</body>

   <!--   Core JS Files   -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-checkbox-radio-switch.js"></script>

    <!--  Charts Plugin -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/chartist.min.js"></script>
    
    <!--  Notifications Plugin    -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap-select.js"></script>    

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/light-bootstrap-dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/ie-emulation-modes-warning.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/ie10-viewport-bug-workaround.js"></script>

</html>