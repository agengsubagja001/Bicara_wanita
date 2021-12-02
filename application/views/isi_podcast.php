<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
    <section>
        <div class="container" style="max-widht:1340px;">
            <div class="aud row">
                <div class="col-md-8">
                    <div class="audio" style=" width: 100%;  background: #FFFFFF; height: auto; box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.07);border-radius: 20px;">
                        <div class="row">
                            <br>
                            <div class="col-md-12 text-center">
                            </div>
                            <br>
                            <!-- awal img podcast -->
                            <div class="col-md-6 p-5">
                              <img class="img-responsive " src="<?php echo base_url().'assets/img_podcast/'. $detail->gambar ?>" alt="" style="max-width: 100%; max-height: auto;">
                            </div>
                            <!-- akhir img podcast -->
                            <div class="col-md-6 p-5 mt-5">
                                <!-- judul podcast -->
                                <center><h5 class="mb-5" style="text-transform: capitalize;"><?php echo $detail->judul ?></h5></center>
                                <!-- akhir judul podcast -->
                                <!-- play podcast -->
                                <audio controls>
                                    <source src="<?php echo base_url().'assets/audio/'. $detail->isi ?>" type="audio/mpeg">
                                </audio>
                                <!-- akhir play podcast -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-1">
                    <div class="row">
                        <div class="col-md-12 mt-2" style="position: relative; top: -8px;">
                            <span style="font-family: Poppins;font-style: normal; font-weight: 600; font-size: 20px;">Podcast Terbaru</span>
                        </div>
                        <?php foreach ($show_terbaru as $terbaru): ?>
                        <!-- awal konten rekomndasi -->
                        <a href="<?php echo base_url().'detail_podcast/isi_podcast/'.$terbaru->id_podcast ?>" style="text-decoration: none;">
                            <div class="col-md-12 mt-3">
                                <div class="row">
                                    <!-- img podcast -->
                                    <div class="col-md-8">
                                      <img class="img-responsive " src="<?php echo base_url().'assets/img_podcast/'. $terbaru->gambar ?>" alt="" style="max-width: 100%; max-height: 100%;">
                                    </div>
                                    <!-- akhir img -->
                                    <!-- judul podcast -->
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 18px; color: #000000; text-transform: capitalize;"><?php echo $terbaru->judul ?></span>
                                    </div>
                                    <!-- akhir judul -->
                                </div>
                            </div>
                        </a>
                        <!-- akhir konten rekomendasi -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<!-- fotter -->
    <div class="fotter" style="position: relative; top: 20px;">
      <?php $this->load->view('partial/footer') ?> 
    </div>

