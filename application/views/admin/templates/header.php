<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
            <span class="d-none d-lg-block"><?= $settings['judul_halaman'] ?></span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2"><?= $users['nama']; ?></span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admins/profil') ?>">
                            <i class="bi bi-person"></i>
                            <span>Profil Saya</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" target="_blank" href="<?= base_url('') ?>">
                            <i class="bi bi-globe"></i>
                            <span>Ke Landing Page</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="<?= base_url('admin/logout') ?>">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Keluar</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admins/dashboard') ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admins/dokumentasi') ?>">
                <i class="bi bi-images"></i>
                <span>Dokumentasi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admins/quote') ?>">
                <i class="bi bi-chat-quote-fill"></i>
                <span>Kata Pengunjung</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= base_url('admins/settings') ?>">
                <i class="bi bi-gear"></i>
                <span>Settings</span>
            </a>
        </li>

    </ul>
</aside>

<main id="main" class="main">
    <div class="pagetitle mb-3">
        <h1><?= $title ?></h1>
    </div><!-- End Page Title -->