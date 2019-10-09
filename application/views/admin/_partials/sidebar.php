<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tabungankita/admin/siswa">
            <i class="fas fa-fw fa-users"></i>
            <span>Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tabungankita/admin/tabungan">
            <i class="fas fa-fw fa-university "></i>
            <span>Tabungan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tabungankita/admin/setoran">
            <i class="fas fa-fw fa-upload"></i>
            <span>Setoran</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tabungankita/admin/penarikan">
            <i class="fas fa-fw fa-download "></i>
            <span>Penarikan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/tabungankita/admin/setting">
            <i class="fas fa-fw fa-cog"></i>
            <span>Settings</span></a>
    </li>
</ul>