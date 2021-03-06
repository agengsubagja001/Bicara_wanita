<!-- head -->
<?php $this->load->view('admin/partial/head') ?>


<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

        <div id="layoutSidenav">
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4" style="color:#555;">Dashboard</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="text-transform:capitalize;">Selamat Datang <?php echo $this->session->userdata('username')  ?></li>
                        </ol>
                        <!-- <h2>TESTING ID = <?php echo $this->session->userdata('id_akun')  ?></h2> -->
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                            
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"><span><?php echo $total_blog; ?> BLOG ADMIN</span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/blog') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- blog penulis -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-dark text-white mb-4">
                                    <div class="card-body"><span><?php echo $total_blog_penulis; ?> BLOG PENULIS</span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/blog_penulis') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir blog penulis -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body"><?php echo $total_program; ?> PROGRAM</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/program') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body"><?php echo $total_podcast; ?> PODCAST</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/podcast') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body"><?php echo $total_infografik; ?> INFOGTAFIK</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/infografik') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- vidio -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body"><?php echo $total_vidio; ?> VIDIO</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/vidio') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir vidio -->
                            <!-- kategori -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg text-white mb-4" style="background-color:#2E4C6D;">
                                    <div class="card-body"><?php echo $total_kategori; ?> kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/kategori') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir kategori -->
                            <!-- kategori -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg text-white mb-4" style="background-color: #FF87CA;">
                                    <div class="card-body"><?php echo $total_story; ?> Story</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url('admin/story') ?>">Lihat Selengkap nya</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!-- akhir kategori -->
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- card list blog -->
                        <div class="row">
                            <!-- card list blog admin -->
                            <div class="col-md-6">
                                <!-- CARD -->
                                <div class="mb-4">
                                    <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                                        <div class="card-header">
                                            <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                                <a class="navbar-brand">
                                                    <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">LIST BLOG ADMIN</b>
                                                </a>
                                            </nav>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered" id="datatablesSimple" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">FOTO SAMPUL</th>
                                                            <th scope="col">JUDUL BLOG</th>
                                                            <th scope="col">TANGGAL LIRIS</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        <?php $no = 1; foreach($show_blog_admin as $blog) : ?>
                                                        <!-- Content pertama-->
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td style="width: 150px">
                                                                <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $blog->gambar ?>" style="object-fit:cover; width:100%; height:auto;" class="img-fluid" alt="">
                                                            </td>
                                                            <td style=""><?php echo $blog->judul ?></td>
                                                            <td><?php echo $blog->date ?></td>
                                                        </tr>
                                                        <!-- Akhir kontent pertama -->
                                                        <?php endforeach ?>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- AKHIR CARD -->
                            </div>

                            <!-- card list blog penulis -->
                            <div class="col-md-6">
                                <!-- CARD -->
                                <div class="mb-4">
                                    <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                                        <div class="card-header">
                                            <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                                <a class="navbar-brand">
                                                    <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">LIST BLOG PENULIS</b>
                                                </a>
                                            </nav>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered" id="datatablesSimple1" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">NO</th>
                                                            <th scope="col">FOTO SAMPUL</th>
                                                            <th scope="col">JUDUL BLOG</th>
                                                            <th scope="col">PENULIS</th>
                                                            <th scope="col">TANGGAL LIRIS</th>
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    
                                                        <?php $no = 1; foreach($show_blog as $blog) : ?>
                                                        <!-- Content pertama-->
                                                        <tr>
                                                            <td><?php echo $no++ ?></td>
                                                            <td style="width: 150px">
                                                                <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $blog->gambar ?>" style="object-fit:cover; width:100%; height:auto;" class="img-fluid" alt="">
                                                            </td>
                                                            <td style=""><?php echo $blog->judul ?></td>
                                                            <td style=""><?php echo $blog->nama_lengkap ?></td>
                                                            <td><?php echo $blog->date ?></td>
                                                        </tr>
                                                        <!-- Akhir kontent pertama -->
                                                        <?php endforeach ?>
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- AKHIR CARD -->
                            </div>
                        </div>
                        <!--akhir card list blog -->
                    </div>
                </main>

                <!--footer  -->
                <?php $this->load->view('admin/partial/footer') ?>

                <?php if ($this->session->flashdata('success')): ?>
                    <script>
                        swal("Berhasil Login", "Selamat anda berhasil login ", "success");
                    </script>
                <?php endif; ?>

            </div>
        </div>
        