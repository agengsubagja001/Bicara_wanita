    <!-- sidebar -->
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    
                    <a class="nav-link mt-2" href="<?php base_url() ?>dashboard">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Blog
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?= base_url() ?>admin/blog">Blog Admin</a>
                            <a class="nav-link" href="<?= base_url() ?>admin/blog_penulis">Blog Penulis</a>
                        </nav>
                    </div>
                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/kategori">
                        <div class="sb-nav-link-icon"><i class="fab fa-buffer"></i></div>
                        Kategori
                    </a>

                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/infografik">
                        <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                        Infografik
                    </a>

                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/program">
                        <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></i></div>
                        Program
                    </a>

                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/vidio">
                        <div class="sb-nav-link-icon"><i class="fas fa-file-video"></i></div>
                        vidio
                    </a>
                    
                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/podcast">
                        <div class="sb-nav-link-icon"><i class="fas fa-microphone-alt"></i></i></div>
                        Podcast
                    </a>

                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/banner">
                        <div class="sb-nav-link-icon"><i class="fas fa-image"></i></div>
                        Banner event
                    </a>
                    
                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/story">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Story
                    </a>
                    <a class="nav-link mt-1" href="<?= base_url() ?>admin/akun_penulis">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Akun Penulis
                    </a>
                </div>
            </div>
        </nav>
    </div>