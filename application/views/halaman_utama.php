<!-- head -->
<?php $this->load->view('partial/head'); ?>

<?php $this->load->view('partial/navbar'); ?>
<!-- awal section 1 slide promo -->
    <section>
            <div class="mt-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/10/29/798f1d1e-8208-4ce2-9af4-8301e893a14b.jpg.webp?ect=3g" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/10/29/7669d78d-14c5-46b0-af5d-baa6929482dc.jpg.webp?ect=3g" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/7/30/74d32a7f-6a2d-49a3-b325-114de4b055c5.jpg.webp?ect=3g" alt="Third slide">
                        </div>
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
            <div class="mb-3">
                 <span style="font-size:30px;font-weight:bold">Kategori</span>
            </div>
            <div class="row">     
                <div class="col-md-6 mt-5">
                    <a href="#"><img src="assets/img/podcast.png" class="img-responsive " style="width: 100%; height: auto;" alt=""></a>
                </div>
                <div class="col-md-6 mt-5">
                    <a href="#"><img src="assets/img/story.png" class="img-responsive " style="width: 100%; height: auto;" alt=""></a>
                </div>
            </div>
        </div>
       <div class="mt-5"></div> 
    </section>
    
<!-- akhir section 2 kategori -->
<!-- awal secton 3 artikel Terbaru -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="mb-3">
               <span style="font-size:30px;font-weight:bold">Artikel Terbaru</span>
            </div>
            <!-- artikel -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach($show_data as $show) : ?>
                        <!-- awal artikel untuk di lopping -->
                            <div class="col-md-6">
                                <!-- Conten Artikel -->
                                <div class="bungkus" style=" max-width: 100%; max-height: 300px;">
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <img src="<?php echo base_url().'assets/img_Sampul/'. $show->gambar ?>" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="col-md-6 mt-3">
                                            <table>
                                                <tr>
                                                    <td>
                                                    <div class="bulet" style="text-transform: capitalize; border-radius:100%; width: 15px; height: 15px; background: #F7476E;"></div>
                                                    </td>
                                                    <td style="position: relative; left:10px; bottom:2px;">
                                                    <span><?php echo $show->kategori ?></span>
                                                    </td>
                                                </tr>
                                            </table>

                                            <a href="<?php echo base_url().'halaman_utama/detail_blog/'.$show->id_blog ?>" style="color:black; text-decoration: none;">
                                                <div class="mt-3">
                                                    <span style="text-transform: capitalize; font-family: Roboto; font-style: normal; font-weight: bold; font-size: 25px; line-height: 28px;"><?php echo $show->judul ?></span>
                                                </div>
                                            </a>
                                            <div class="mt-4">
                                                <span style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 14px; line-height: 21px;"><?php echo $show->date ?></span>
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
        <div class="mt-5"></div>      
    </section>
    <br>
<!-- akhir section 3 artikel terbaru -->
<!-- awal section 4 program -->
    <section>
        <div class="container"  style="max-width: 1340px;">
            <div class="mb-3">
                 <span style="font-size:30px;font-weight:bold">Program</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- card untuk di loping  -->
                    <?php foreach($show_program as $program): ?>
                        <div class="mt-5"> 
                            <div class="card" style="width: 100%;">
                                <img class="card-img-top" src="<?php echo base_url().'assets/admin/program/img_konten/'. $program->gambar_kontent ?>" alt="Card image cap">
                                <div class="card-body">
                                    <a href="<?php echo base_url().'halaman_utama/detail_program/'.$program->id_program ?>" style="color:black; text-decoration: none;"><p class="card-text" style="font-family: Roboto;font-style: normal; font-weight: bold; font-size: 30px; line-height: 56px; text-align: center;"><?php echo $program->judul ?></p></a>
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
                <span style="font-size:30px;font-weight:bold">Podcast</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <?php foreach($show_podcast as $podcast): ?>
                        <!-- awal content podcast -->
                        <div class="col-md-3 mt-3">
                            <a href="#"><img src="<?php echo base_url().'assets/img_podcast/'. $podcast->gambar ?>" class="img-responsive"  style="width: 100%; height: auto;" alt=""></a>
                        </div>
                        <!-- akhir content podcast -->
                        <?php endforeach ?>
                        
                    </div>
                </div>
                <div class="col-md-12 text-right mt-3">
                     <a href="#"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
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
                <span style="font-size:30px;font-weight:bold">Story</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- awal content story -->
                        <div class="col-md-6 mt-3">
                            <div class="story" style="position:relative;padding:20px;width:100%;height:auto;background: #FFFFFF; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-radius: 5px;">
                                <div class= "row">
                                    <div class="col-md-2">
                                        <img src="assets/img/ikon.png" class="img-fluid" style="width:70px; height:70px;" alt="">
                                    </div>
                                    <div class="col-md-10 mt-2">
                                        <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Apakah Hidup Bisa Lebih Mudah</span>
                                        <div class="mb-2"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                                    </div>
                                </div>
                                <div style="bottom: 15px;margin-top:3%">
                                    <span>Nama Penulis</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="story" style="position:relative;padding:20px;width:100%;height:auto;background: #FFFFFF; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-radius: 5px;">
                                <div class= "row">
                                <div class="col-md-2">
                                    <img src="assets/img/ikon.png" class="img-fluid" style="width:70px; height:70px;" alt="">
                                </div>
                                <div class="col-md-10 mt-2">
                                    <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Apakah Hidup Bisa Lebih Mudah</span>
                                    <div class="mb-2"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                                </div>
                                </div>
                                <div style="bottom: 15px;margin-top:3%">
                                    <span>Nama Penulis</span>
                                </div>
                            </div>
                        </div>
                        <!-- akhir content story -->
                        <div class="col-md-12 text-right mt-5">
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
                   <span style="font-size:30px;font-weight:bold">Vidio</span>
                </div>
            </div>
            <div class="container" style="max-width: 1360px;">
                <div id="demo" class="carousel slide position-relative" data-ride="carousel">
                        <!-- Indicators -->
                                    <ul class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class=""></li>
                                        <li data-target="#demo" data-slide-to="1" class="active"></li>
                                        <li data-target="#demo" data-slide-to="2" class=""></li>
                                    </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active carousel-item-left">
                                <div class="d-flex">
                                    <?php foreach ($show_vidio as $vidio): ?>
                                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column" style="width:100%; height:300;">
                                        <a href="">
                                            <img style="width:200px; height:auto;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" alt="">
                                        </a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>	
                                <div class="carousel-item carousel-item-next carousel-item-left">
                                    <div class="d-flex">
                                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                            </iframe>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                            <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                            </iframe>
                                        </div>
                                    </div>

                                </div>
                                    <div class="carousel-item ">
                                        <div class="d-flex">
                                            <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>
                                            </div>
                                            <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>
                                            </div>
                                            <div class="col-lg-4 col-sm-12 col-12 d-flex flex-column ">
                                                <iframe width="100%" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>
                                            </div> 
                                                
                                        </div>

                                    </div>
                        </div>
                </div>
                <div class="col-md-12 text-right mt-5">
                    <a href="<?php echo base_url('detail_vidio') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                </div>
            </div>
             <div class="mb-5"></div>     
    </section>
<!-- akhir section 7 vidio -->
<!-- awal section 8 infografik -->
    <section class=""  >
                <div class="container" style="max-width: 1330px;">
                    <div class="mb-3">
                            <span style="font-size:30px;font-weight:bold">Infografik</span>
                        </div>
                    </div>
                </div>
                <div class="container" style="max-width: 1400px;">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- Carousel -->
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" style=" padding: 2em;">
                                                <div class="carousel-item active">
                                                    <div class="cards-wrapper" style=" display: flex; justify-content: center;">
                                                        <?php foreach($show_infografik as $infografik): ?>
                                                        <div class="card1">
                                                            <a href="<?php echo base_url().'halaman_utama/artikel_infografik/'.$infografik->id_infografik ?>">
                                                                <img src="<?php echo base_url().'assets/admin/infografik/img_infografik/'. $infografik->gambar_kontent ?>" style="max-width: 100%; max-height: auto; padding-left: 10px;" class="card-img-top" alt="...">
                                                            </a>
                                                        </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                                    <div class="carousel-item">
                                                        <div class="cards-wrapper" style=" display: flex; justify-content: center;">
                                                            <div class="card1">
                                                                <a href="#">
                                                                <img src="assets/img/jokowi.png" style="max-width: 100%; max-height: auto; padding-left: 10px;" class="card-img-top" alt="...">
                                                                </a>
                                                            
                                                            </div>
                                                            <div class="card1 d-none d-md-block">
                                                                <a href="#">
                                                                <img src="assets/img/jokowi.png" style="max-width: 100%; max-height: auto; padding-left: 10px;" class="card-img-top" alt="...">
                                                                </a>
                                                            
                                                            </div>
                                                            <div class="card1 d-none d-md-block">
                                                                <a href="#">
                                                                <img src="assets/img/jokowi.png" style="max-width: 100%; max-height: auto; padding-left: 10px;" class="card-img-top" alt="...">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            <a class="carousel-control-prev" style="background-color: #e1e1e1; width: 5vh; height: 5vh; border-radius: 50%; top: 50%; transform: translateY(-50%);" href="#carouselExampleControls" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" style="background-color: #e1e1e1; width: 5vh; height: 5vh; border-radius: 50%; top: 50%; transform: translateY(-50%);" href="#carouselExampleControls" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    <!-- Akhir Carousel -->
                                    <div class="col-md-12 text-right mt-5" style="position: relative; right:11px;">
                                       <a href="<?php echo base_url('detail_infografik') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Lihat Semua</button></a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                </div>            

                    
    </section>
    <br>
<!-- akhir section 8 infografik -->
<?php $this->load->view('partial/footer') ?> 
    <style>
           /* css vidio */
           .ourworks-box{
            width: 60%;
            justify-content: center;
            text-align: center;
            }
            .introduce{
                height: 250px;
                background-color:white;
                box-shadow: 0 3px 10px #5969f642;
                border-bottom: 4px solid #5969f6;
                color: black;
            }

            .introduce:hover{
                box-shadow: 0 3px 15px #5969f666;
                border-bottom: 4px solid #B122e5;
                color: black;
                text-decoration: none;
            }
            .flex-column-1{
                height: 70%;
                width: 100%;

            }
            .flex-column-2{
                height: 30%;
                width: 100%;
                align-items:center;
            }
            .text-gray{
                color: gray;
            }
            .pic{
                height: 70px;
                width: 70px;
                margin-left: 20px;
                border-radius: 50%;
                transition: all .2s ease-in-out;
            }

            .introduce:hover .pic{
                transform: scale(1.1);
            }
            .carousel-indicators .active{
                background-color: #46eeaa;
            }
            .carousel-indicators li{
                background-color: #c8e5ff;
            }
            .carousel-indicators{
                bottom: -50px;
            }
            
           /* akhir css vidio */

    </style>