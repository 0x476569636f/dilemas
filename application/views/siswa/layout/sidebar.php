<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dilemas SMAN 2</div>
    </a>


    <!-- Heading -->
    <div class="sidebar-heading">
        Beranda
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (
                            $this->uri->segment(1) == 'siswa' || $this->uri->segment(1) == 'datasiswa'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-home"></i>
            <span>BERANDA</span>
        </a>
        <div id="collapseTwo" class="collapse  <?php if ($this->uri->segment(1) == 'siswa') {
                                                    echo 'show';
                                                }
                                                if ($this->uri->segment(1) == 'datasiswa') {
                                                    echo 'show';
                                                } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Beranda & Data Siswa</h6>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'siswa'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('siswa'); ?>">Home</a>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'datasiswa'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('datasiswa'); ?>">Data Siswa</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->