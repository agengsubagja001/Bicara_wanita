<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<br>
<br>
<body>
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="row">
                <!-- vidio play -->
                <div class="col-md-8">
                    <div class="row">
                     <div class="col-md-12">
                        <iframe width="100%" height="400"
                           src="<?php echo $detail->isi_vidio ?>">
                        </iframe>
                     </div> 
                     <div class="col-md-12 mb-2">
                        <span style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px;"><?php echo $detail->judul ?></span>
                     </div>  
                    </div>
                </div>
                <!-- akhir vidio play -->
                <!-- vidio rekomendasi -->
                <div class="col-md-4 mt-1">
                    <div class="row">
                        <div class="col-md-12" style="position: relative; top: -8px;">
                            <span style="font-family: Poppins;font-style: normal; font-weight: 600; font-size: 20px;">Vidio Terbaru</span>
                        </div>
                        <!-- awal konten rekomndasi -->
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <?php foreach ($terbaru1 as $new) : ?>
                                <div class="row">
                                    <div class="col-md-8">
                                        <img style="width:100px; height:100px;" src="<?php echo $new->gambar_thubnail ?>" alt="">
                                        
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;"><?php echo $new->judul ?></span>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </a>
                        <!-- akhir konten rekomendasi -->
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <iframe width="100%"
                                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;">Tutorial Masker Anti Komedo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <iframe width="100%"
                                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;">Tutorial Masker Anti Komedo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <iframe width="100%"
                                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;">Tutorial Masker Anti Komedo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <iframe width="100%"
                                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;">Tutorial Masker Anti Komedo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" style="text-decoration: none;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8">
                                        <iframe width="100%"
                                            src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                        </iframe>
                                    </div>
                                    <div class="col-md-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000;">Tutorial Masker Anti Komedo</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- akhir vidio rekomendasi -->
            </div>
        </div>
    </section>
    <div class="fotter" style="position: relative; top: 20px;">
        <?php $this->load->view('partial/footer') ?> 
    </div>

</body>