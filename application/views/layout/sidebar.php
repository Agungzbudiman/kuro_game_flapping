<!-- Sidebar -->
<?php 
$dataLogin = $this->session->userdata('loginData');
$typeUser = ['1'=>'User','9'=>'Super Admin'];
$uri = $this->uri->segment(1);
?>
<style type="text/css">
    .nav-item i[class^="flaticon-"]{
        margin-right: 25px !important;
    }
</style>
<div class="sidebar">
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div style="text-align: center;color: black">
                    <img src="<?= base_url('assets/') ?>assets/img/profile.jpg" style="width: 75%;" alt="..." class="avatar-img rounded-circle">
                    <h3><?= $dataLogin['name'] ?></h3>
                    <h3><b><?= $typeUser[$dataLogin['userAccess']] ?></b></h3>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Main</h4>
                </li>
                <li class="nav-item <?= ($uri=='dashboard'?'active':'') ?>">
                    <a href="<?= base_url('dashboard') ?>">
                        <i class="flaticon-internet" style=""></i>
                        <p>Dashboard</p>
                        <!-- <span class="badge badge-count">5</span> -->
                    </a>
                </li>
                <?php if ($dataLogin['userAccess'] == '9') { ?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Rumah Tahanan</h4>
                </li>
                <li class="nav-item <?= ($uri=='terima'?'active':'') ?>">
                    <a href="<?= base_url('terima') ?>">
                        <i class="flaticon-bars-2"></i>
                        <p>Terima Kunjungan</p>
                    </a>
                </li>
                <li class="nav-item <?= ($uri=='wbp'?'active':'') ?>">
                    <a href="<?= base_url('wbp') ?>">
                        <i class="flaticon-user"></i>
                        <p>Daftar Tahanan (WBP)</p>
                    </a>
                </li>
                <?php } ?>
                <li class="nav-item <?= ($uri=='kunjungan'?'active':'') ?>">
                    <a href="<?= base_url('kunjungan') ?>">
                        <i class="flaticon-user-1"></i>
                        <p>Kunjungan Rutan</p>
                    </a>
                </li>
                <?php if ($dataLogin['userAccess'] == '9') { ?>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">System</h4>
                </li>
                <li class="nav-item <?= ($uri=='users'?'active':'') ?>">
                    <a href="<?= base_url('users') ?>">
                        <i class="flaticon-user-5"></i>
                        <p>Users</p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->