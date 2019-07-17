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
       
    <!--  Table CSS    -->
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
        padding: 10px;
        }
        th {
        background-color: black;
        color: white;
        border: 1px solid white;
        }
    </style>
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
                                                
                        <h3>Laporan Jadwal Piket Witel Banten Timur</h3>
                            <table align="center" cellspacing="0" cellpadding="5" width="100%">
                            <thead>
                                <th><center>No.</center></th>
                                <th><center>NIK</center></th>
                                <th><center>Nama</center></th>
                                <th><center>Nomor Telepon</center></th>
                                <th><center>Jam Jaga</center></th>
                                <th colspan="2"><center>Aksi</th>
                            </thead>
                            <tbody>
                              <?php
                               $no=1;
                               foreach ($piket as $p) {
                                 echo "<tr>
                                         <td>$no</td>
                                         <td>$p->nik</td>
                                         <td>$p->nama</td>
                                         <td>$p->telp</td>
                                         <td>$p->jam_jaga</td>
                                          <td>
                                            <center><a class = 'btn' href='".base_url()."index.php/admin/FormEditPiket/".$p->nik."'>Sunting</a></center>
                                            </td>
                                            <td>
                                            <center><a class = 'btn' href='".base_url()."index.php/admin/AksiDeletePiket/".$p->nik."'>Hapus</a></center>
                                           </td>
                                      </tr>";
                                 $no++;
                               }
                              ?>
                            </tbody>
                 </table>
                 <br/>
                        <center>
                            <a button type="button" class="btn btn-default" href="<?php echo base_url() ?>index.php/admin/FormAddPiket" role="button">Tambah Data</a>
                            <a button type="button" class="btn btn-default" href="" role="button" onclick="window.print()">Print Laporan</a>
                        </center>
            </div>
        </div>


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
