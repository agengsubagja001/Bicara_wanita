<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>

<body>
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <!-- awal kategori -->
                        <div class="col-md-12">
                           
                        </div>
                        <!-- akhir kategori -->
                        <!-- awal card kategori -->
                        <div class="ktg col-md-8">
                            <div class="Kategori" style="width:100%; box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <!-- awal konten kategori -->
                            <?php foreach ($show_sehat as $kesehatan): ?>
                                <a href="<?php echo base_url().'halaman_utama/detail_blog/'.$kesehatan->id_blog ?>" style="text-decoration: none; color:black;">
                                    <div class="col-md-12 text-center p-5">
                                        <div class= "row no-gutters">
                                            <div class="col-md-2">
                                                <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $kesehatan->gambar ?>" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                            </div>
                                            <div class="col-md-10 mt-2 text-left">
                                                <!-- nama kategori -->
                                                <table>
                                                    <tr>
                                                        <td>
                                                        <div class="bulet" style="text-transform: capitalize; border-radius:100%; width: 15px; height: 15px; background: #F7476E;"></div>
                                                        </td>
                                                        <td style="position: relative; left:10px; bottom:2px;">
                                                        <span><?php echo $kesehatan->kategori ?></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <!-- akhir nama kategori -->
                                                <span style="font-family: Inter; font-style: normal;font-weight: 500; font-size: 18px;"><?php echo $kesehatan->judul ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center" style="margin-top:3px;">
                                           <span style="color:#555;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $kesehatan->date ?></span>
                                        </div>
                                        <div class="col-md-12">
                                        <hr>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                            <!-- akhir konten kategori -->
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
