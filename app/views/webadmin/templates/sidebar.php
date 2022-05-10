<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">

        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-tools"></i>
        </div>

        <div class="sidebar-brand-text mx-3">Peminjaman<br>Alat Lab</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!--side bar menu-->
    <li class="nav-item">
        <a class="nav-link" href="user">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span></a>
    </li>


    <li class="nav-item">
        <a class="nav-link" href="barang">
            <i class="fas fa-fw fa-shopping-bag"></i>
            <span>Barang</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-running"></i>
            <span>Aktivitas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" 
        data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="peminjaman">Peminjaman</a>
                <a class="collapse-item" href="pengembalian">Pengembalian</a>
                <a class="collapse-item" href="perpanjangan">Perpanjangan</a>
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