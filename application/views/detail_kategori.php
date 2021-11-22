<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<br>
<body>
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <!-- awal kategori -->
                        <div class="col-md-12">
                            <center><h1>Kesehatan</h1></center>
                        </div>
                        <!-- akhir kategori -->
                        <!-- awal card kategori -->
                        <div class="col-md-8">
                            <div class="Kategori" style=" width: 100%;  background: #FFFFFF; height: auto; box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.07);border-radius: 20px;">
                            <!-- awal konten kategori -->
                            <?php foreach ($show_langsung as $kategori): ?>
                                <a href="#" style="text-decoration: none; color:black;">
                                    <div class="col-md-12 text-center p-5">
                                        <div class= "row no-gutters">
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url().'assets/admin/blog/img_Sampul/'. $kategori->gambar ?>" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                            </div>
                                            <div class="col-md-10 mt-2 text-left">
                                                <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;"><?php echo $kategori->judul ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-top:3px;">
                                           <span><?php echo $kategori->tanggal ?></span>
                                        </div>
                                        <div class="col-md-12">
                                        <hr>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                            <!-- akhir konten kategori -->
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                <a href="#" style="text-decoration: none; color:black;">
                                        <div class="col-md-12 text-center p-5">
                                            <div class= "row no-gutters">
                                                <div class="col-md-2">
                                                    <img src="assets/img/dokter.jpg" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                                </div>
                                                <div class="col-md-10 mt-2 text-left">
                                                    <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;">Mengenal Dokter Dinda Derdameisya, Ginekolog yang Aktif Bikin Konten Edukasi</span>
                                                </div>
                                            </div>
                                            <div class="col-md-12 text-center" style="margin-top:3px;">
                                            <span>15/November/2021</span>
                                            </div>
                                            <div class="col-md-12">
                                            <hr>
                                            </div>
                                        </div>
                                </a>
                                
                            </div>
                        </div>
                        <!-- akhir card kategori -->
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
<!-- fotter -->
<div class="fotter" style="position: relative; top: 180px;">
    <?php $this->load->view('partial/footer') ?> 
</div>
