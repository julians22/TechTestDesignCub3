<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop-medical"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Doc</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($this->uri->segment(1) == $user['role'] && $this->uri->segment(2) == '') ? 'active' :''; ?>">
                <a class="nav-link" href="<?= base_url().$user['role'] ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?= ($this->uri->segment(1) == 'booking') ? 'active' :''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>booking">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Booking Dokter</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= ($this->uri->segment(2) == 'list_dokter') ? 'active' :''; ?>">
                <a class="nav-link" href="<?= base_url(); ?>dokter/list_dokter">
                    <i class="fas fa-fw fa-table"></i>
                    <span>List Dokter</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->