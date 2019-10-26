<!-- Sidebar -->
<?php $level=$this->session->userdata('level'); ?>
<?php if($level=='1'){ ?> 
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/siswa')?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/tabungan')?>">
            <i class="fas fa-fw fa-university "></i>
            <span>Tabungan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/setoran')?>">
            <i class="fas fa-fw fa-upload"></i>
            <span>Setoran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/penarikan')?>">
            <i class="fas fa-fw fa-download "></i>
            <span>Penarikan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/akun')?>">
            <i class="fas fa-fw fa-th-list "></i>
            <span>Akun</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('Auth/logout')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>
<?php }?>
<?php if($level=='2'){ ?> 
<ul class="sidebar navbar-nav">
  
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/tabungan')?>">
            <i class="fas fa-fw fa-university "></i>
            <span>Tabungan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/setoran')?>">
            <i class="fas fa-fw fa-upload"></i>
            <span>Setoran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('admin/penarikan')?>">
            <i class="fas fa-fw fa-download "></i>
            <span>Penarikan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="<?=site_url('Auth/logout')?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
</ul>
<?php }?>