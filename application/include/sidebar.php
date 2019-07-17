<div id="sidebar">
<!-- Sidebar Was Here -->
	<div class="sidebar" data-color="red" data-image="<?php echo base_url()?>assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <img draggable="false" src="<?php echo base_url()?>assets/img/logo-white.png" style="margin-left: 50px; width: 170px; height: 116px;">
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url() ?>index.php/superadmin/index">
                        <i class="pe-7s-graph"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <i class="pe-7s-network"></i>
                        <p>Pengelolaan Traffic</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <li>
                            <a href="<?php echo base_url() ?>index.php/superadmin/data_trunk">
                            <span class="fa fa-check"></span> Data Trunk Metro
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/superadmin/data_traffic">
                            <span class="fa fa-check"></span> Data Traffic Metro
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="">
                        <i class="pe-7s-plug"></i>
                        <p>Metro & Transmisi</p>
                    </a>
                    <ul style="list-style-type: none;">
                        <!--<li>
                            <a href="<?php //echo base_url() ?>index.php/admin/trunk">
                            <span class="fa fa-check"></span> Standar Redaman Port Trunk
                            </a>
                        </li>
                        <br>-->
                        <li>
                            <a href="<?php echo base_url() ?>index.php/superadmin/jadwal_piket">
                            <span class="fa fa-check"></span> Jadwal Piket Ruang Metro
                            </a>
                        </li>
                        <br>
                        <li>
                            <a href="<?php echo base_url() ?>index.php/superadmin/data_cable">
                            <span class="fa fa-check"></span> Pendataan Kabel
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/superadmin/temperature">
                        <i class="pe-7s-drop"></i>
                        <p>Data Temperatur</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>index.php/superadmin/user">
                        <i class="pe-7s-add-user"></i>
                        <p>Pengelolaan User</p>
                    </a>
                </li>
            </ul>
      </div>
    </div>
<!-- Sidebar END -->
</div>