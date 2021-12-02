<!-- head -->
<?php $this->load->view('partial/head'); ?>

<?php $this->load->view('partial/navbar'); ?>
<!-- awal section 1 slide promo -->
    <section>
            <div class="mt">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/rema.png') ?>" alt="First slide">
                        </div>
                        <?php foreach ($show_banner as $banner): ?>
                        <div class="carousel-item">
                            <a href="<?php echo base_url().'halaman_utama/detail_program/'.$banner->id_program ?>">
                                <img class="d-block w-100" src="<?php echo base_url().'assets/banner/'. $banner->gambar_banner ?>" alt="Second slide">
                            </a>
                        </div>
                        <?php endforeach ?>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        <div class="mb-5"></div> 
    </section>
<!--akhir section 1 slide Promo  -->
<!-- awal section 2 kategori -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="mb-2">
                 <span style="font-size:1.5em;font-weight:bold">Kategori</span>
            </div>
            <div class="row">     
                <div class="col-md-6 mt-4">
                    <a href="<?php echo base_url('detail_podcast') ?>"><img src="assets/img/podcast.png" class="img-responsive " style="width: 100%; height: auto;" alt=""></a>
                </div>
                <div class="col-md-6 mt-4">
                    <a href="<?php echo base_url('detail_story') ?>"><img src="assets/img/story.png" class="img-responsive " style="width: 100%; height: auto;" alt=""></a>
                </div>
            </div>
        </div>
       <div class="mt-5"></div> 
    </section>
    
<!-- akhir section 2 kategori -->
<!-- awal secton 3 artikel Terbaru -->
    <section>

            <?php 
                $id = $_GET["code"];
                $id_cek = $this->session->userdata('access_token');
                $id_aja = $this->session->userdata('username');
            ?>

            <div class="mb-3">
               <span style="font-size:1.5em;font-weight:bold">Artikel Terbaru</span>
               <?php 
               echo ($id);
               ?>
            </div>

            <div class="col-md-12">
                <?php 
                var_dump($id_aja);
                ?>
            </div>
            <div class="col-md-12">
                <?php 
                var_dump($id_cek);
                ?>
            </div>


        <div class="container" style="max-width: 1340px;">
            <div class="mb-3">
               <span style="font-size:1.5em;font-weight:bold">Artikel Terbaru</span>
            </div>
            <!-- artikel -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach($show_data as $show) : ?>
                        <!-- awal artikel untuk di lopping -->
                            <div class="col-md-6">
                                <!-- Conten Artikel -->
                                <div class="bungkus" style=" max-width: 100%;">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $show->gambar ?>" style="object-fit:cover; width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <table>
                                                <tr>
                                                    <td>
                                                       <div class="bulet" style="text-transform: capitalize; border-radius:100%; width: 15px; height: 15px; background: #F7476E;"></div>
                                                    </td>
                                                    <td style="color:#666; position: relative; left:10px; bottom:2px;">
                                                       <span><?php echo $show->kategori ?></span>
                                                    </td>
                                                </tr>
                                            </table>
                                                <a class="judul" href="<?php echo base_url().'halaman_utama/detail_blog/'.$show->id_blog ?>" style="text-decoration: none; color:black;">
                                                    <div class="mt-2">
                                                      <span class="" style=" text-transform: capitalize;"><?php echo $show->judul ?></span>
                                                    </div>
                                                </a>
                                            <div class="mt-4">
                                                <span style="color:#666; font-family: Poppins; font-style: normal; font-weight: 300; font-size: 14px; line-height: 21px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $show->date ?></span>
                                            </div>
                                        </div> 
                                    </div>
                                    <hr>
                                </div>    
                                <!-- Akhir Content Artikel -->
                            </div>
                        <?php endforeach ?>
                        <!-- akhir aktikel -->
                                
                    </div>
                </div>
            </div>
            <!-- akhir artikel -->
        </div>
        <div class="mt-3"></div>      
    </section>
    <br>
<!-- akhir section 3 artikel terbaru -->
<!-- awal section 4 program -->
    <section>
        <div class="container"  style="max-width: 1340px;">
            <div class="mb-1">
                 <span style="font-size:1.5em;font-weight:bold">Program</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- card untuk di loping  -->
                    <?php foreach($show_program as $program): ?>
                        <div class="mt-4"> 
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="<?php echo base_url().'assets/admin/program/img_konten/'. $program->gambar_kontent ?>" alt="Card image cap">
                                <div class="card-body">
                                    <a class="program" href="<?php echo base_url().'halaman_utama/detail_program/'.$program->id_program ?>" style="color:black; text-decoration: none;"><p class="judul2 card-text" style=""><?php echo $program->judul ?></p></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- akhir card untuk di loping -->
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </section>
<!-- akhir section 4 program -->
<!-- awal secrion 5 -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="mb-3">
                <span style="font-size:1.5em;font-weight:bold">Podcast</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach($show_podcast as $podcast): ?>
                        <!-- awal content podcast -->
                        <div class="col-md-3 mt-3">
                            <a href="<?php echo base_url().'detail_podcast/isi_podcast/'.$podcast->id_podcast ?>"><img src="<?php echo base_url().'assets/img_podcast/'. $podcast->gambar ?>" class="img-responsive"  style="width: 100%; height: auto;" alt=""></a>
                        </div>
                        <!-- akhir content podcast -->
                        <?php endforeach ?>
                        
                    </div>
                </div>
                <div class="col-md-12 text-right mt-3">
                     <a href="<?php echo base_url('detail_podcast') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                </div>
            </div>
            <div class="mb-5"></div>
        </div>
    </section>
<!-- akhir section 5 -->
<!-- awal section 6 story -->
    <section>
        <div class="container" style="max-width: 1340px;"> 
            <div class="mb-3">
                <span style="font-size:1.5em;font-weight:bold">Story</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- awal content story -->
                        <?php foreach ($show_story as $story): ?>
                        <div class="col-md-6 mt-3">
                            <a style="text-decoration: none; color:black;" href="<?php echo base_url().'detail_story/artikel_story/'. $story->id_story ?>">
                            <div class="story" style="position:relative;padding:20px;width:100%;height:auto;background: #FFFFFF; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-radius: 5px;">
                                <div class= "row">
                                    <div class="col-md-2">
                                        <img src="assets/img/ikonstory.png" class="img-fluid" style="width:70px; height:70px; border-radius: 50%;" alt="">
                                    </div>
                                    <div class="col-md-10 mt-2">
                                        <span class="mb-1" style="letter-spacing: 0.5px; font-family: Inter; font-style: normal;font-weight: 500; font-size: 20px; line-height: 25px;"><?php echo $story->judul_story ?></span>
                                        <div class="mb-2"><span style="letter-spacing: 0.5px; color: #555; text-transform: capitalize; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;"><?php echo $story->isi_story ?></span></div>
                                    </div>
                                </div>
                                <div style="bottom: 15px;margin-top:3%">
                                    <span style="color: #555; letter-spacing: 0.5px; text-transform: capitalize;"><?php echo $story->username ?></span>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php endforeach ?>
                        <!-- akhir content story -->
                        <div class="col-md-12 text-right mt-3">
                          <a href="<?php echo base_url('detail_story') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-5"></div>
    </section>
<!-- akhir section 6 Story -->

<!-- awal section 7 vidio -->
    <section>
            <div class="container" style="max-width: 1340px;">
                        <div class="mb-3">
                            <span style="font-size:1.5em;font-weight:bold">Vidio</span>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach ($show_vidio as $vidio): ?>
                                        <!-- awal content vidio -->
                                        <div class="col-md-3 mt-3">
                                            <a href="<?php echo base_url().'halaman_utama/isi_vidio/'.$vidio->id_vidio ?>">
                                                <img class="img-responsive"  style="width: 100%; height: auto;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" alt="">
                                            </a>
                                            <div class="middle">
                                                <div class="text"><i class="fa fa-play" aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                        <!-- akhir content vidio -->
                                    <?php endforeach ?>
                                    
                                </div>
                            </div>
                            <div class="col-md-12 text-right mt-3">
                                <a href="<?php echo base_url('detail_vidio') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                            </div>
                        </div>
                        <div class="mb-5"></div>
            </div>       
    </section>
<!-- akhir section 7 vidio -->
<!-- awal section 8 infografik -->
    <section>        
        <div class="container" style="max-width: 1340px;">
                <div class="mb-3">
                    <span style="font-size:1.5em;font-weight:bold">infografik</span>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <?php foreach($show_infografik as $infografik): ?>
                                <!-- awal content infografik -->
                                <div class="col-md-4 mt-3">
                                    <a href="<?php echo base_url().'halaman_utama/artikel_infografik/'.$infografik->id_infografik ?>">
                                        <img src="<?php echo base_url().'assets/admin/infografik/img_infografik/'. $infografik->gambar_kontent ?>" style="max-width: 100%; max-height: auto; " class="card-img-top" alt="...">
                                    </a>
                                </div>
                                <!-- akhir content podcast -->
                            <?php endforeach ?>
                            
                        </div>
                    </div>
                    <div class="col-md-12 text-right mt-3">
                        <a href="<?php echo base_url('detail_infografik') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                    </div>
                </div>
                <div class="mb-5"></div>
        </div>          
    </section>
    <br>
<!-- akhir section 8 infografik -->

<!-- awal fotter -->
<?php $this->load->view('partial/footer') ?> 
<!-- akhir fotter -->

<style>
 /* css thumnil */
            
        .middle {
                transition: .5s ease;
                opacity: 30%;
                position: absolute;
                top: 50%;
                left: 50%;
                border-radius:50px;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                text-align: center;
            }
            .container:hover .middle {
                opacity: 80%;
            }

            .text {
                background-color: #EB0009;
                color: white;
                border-radius:50px;
                font-size: 20px;
                padding: 20px 20px;
                width: 70px;
                height:70px;
                text-align: center;
            }
           /* css thumnil */
</style>
        