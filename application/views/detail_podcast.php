<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
<!-- awal section daftar podcast -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="dft mb-3">
                <span style="">Daftar Podcast</span>
            </div>
            <div class="row">
                <?php foreach($show_podcast as $podcast): ?> 
                <!-- awal konten daftar podcas -->
                <div class="col-6 col-md-3 mt-2">
                    <a href="<?php echo base_url().'detail_podcast/isi_podcast/'.$podcast->id_podcast ?>"><img class="img-responsive" src="<?php echo base_url().'assets/img_podcast/'. $podcast->gambar ?>" alt="" style="max-width: 100%; max-height: auto;"></a>
                </div>
                <!-- akhir konten daftar podcast -->
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <br>
    <br>
<!-- akhir section daftar podcast -->
<!-- banner pembatas -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <img src="assets/img/bannerpodcast.jpg" alt="" style=" max-width: 100%; max-height: auto;">
        </div>
    </section>
<!-- akhir banner pembatas -->
<br>
<br>
<!-- awal section playlist -->
<section>
    <div class="container" style="max-width: 1340px;">
     <div class="row">
        <?php foreach ($show_terbaru as $terbaru): ?>
        <div class="col-6 col-md-6 mt-2">
            <!-- Conten playlist -->
            <div class="row">
                <div class="col-md-6 mt-2">
                    <img src="<?php echo base_url().'assets/img_podcast/'. $terbaru->gambar ?>" style="width: 100%; height: auto;" alt="">
                </div>
                <div class="col-md-6 mt-3">
                    <a href="<?php echo base_url().'detail_podcast/isi_podcast/'.$podcast->id_podcast ?>" style="color:black; text-decoration: none;">
                        <div class="jdlpdcs">
                            <span style=""><?php echo $terbaru->judul ?></span>
                        </div>
                    </a>
                    <div class="mt-5">
                        <span style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 14px; line-height: 21px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $terbaru->tanggal ?></span>
                    </div>
                    <div class="mt-5">
                        <audio controls>
                            <source src="<?php echo base_url().'assets/audio/'. $terbaru->isi ?>" type="audio/mpeg">
                        </audio>
                    </div>
                </div>  
            </div>
            <!-- Akhir Content plyalist -->
        </div>
        <?php endforeach ?>
     </div>
    </div>
</section>
<!-- akhir section playlist -->
</body>
<br>
<br>
<!-- footer -->
<?php $this->load->view('partial/footer') ?> 