<?php

if ($_SESSION['level'] == 'admin') {

?>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/dashboard.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/events/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Events</span>
                </a>
            </li>


            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/instruktur/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Instruktur</span>
                </a>
            </li>

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/bidang/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Bidang</span>
                </a>
            </li>

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/kategori_event/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Kategori Event</span>
                </a>
            </li>

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/uang_peserta/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Pendaftaran peserta</span>
                </a>
            </li>

            <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-layout-text-window-reverse"></i><span>Events</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="tables-general.php">
                    <i class="bi bi-circle"></i><span>Training</span>
                </a>
            </li>
            <li>
                <a href="tables-data.php">
                    <i class="bi bi-circle"></i><span>Mentoring</span>
                </a>
            </li>
        </ul>
    </li> -->
            <!-- End Tables Nav -->


            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/admin-profile.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

        </ul>

    </aside>
<?php } else { ?>

    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/dashboard.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span class="">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/partisipan_events/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Events</span>
                </a>
            </li>
            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/partisipan_kelas/index.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-grid"></i>
                    <span>Kelas</span>
                </a>
            </li>


            <li class="nav-item">
                <?php
                $target = "/jwb_webdinamis/view/dashboard/users-profile.php";
                ?>
                <a class="nav-link <?= ($_SERVER['PHP_SELF'] == $target) ? '' : 'collapsed' ?>" href="<?= $target ?>">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->
<?php } ?>

<main id="main" class="main">