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
                <div class="col-md-7">
                    <div class="row">
                     <div class="col-md-12" style="width:100%; height:auto;">
                        <?php echo $detail->isi_vidio ?>
                     </div> 
                     <div class="col-md-10 mb-2">
                        <span style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; text-transform: capitalize;"><?php echo $detail->judul ?></span>
                     </div>  
                    </div>
                </div>
                <!-- akhir vidio play -->
                <!-- vidio rekomendasi -->
                <div class="col-md-5 mt-1">
                    <div class="row">
                        <div class="col-md-12" style="position: relative; top: -8px;">
                            <span style="font-family: Poppins;font-style: normal; font-weight: 600; font-size: 20px;">Vidio Terbaru</span>
                        </div>
                        <!-- awal konten rekomndasi -->
                        
                            <div class="col-md-11">
                                <?php foreach ($terbaru1 as $new) : ?>
                                   <a href="<?php echo base_url().'halaman_utama/isi_vidio/'.$new->id_vidio ?>" style="text-decoration: none;">
                                <div class="row">
                                    <div class="col-md-6 mt-4">
                                        <img class="img-fluid" style="margin-top:4px  width:100%; height:100px;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $new->gambar_thubnail ?>" alt="">
                                        <div class="middle">
                                            <div class="text">Play</div>
                                        </div>  
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 15px; color: #000000; text-transform: capitalize;"><?php echo $new->judul ?></span>
                                    </div>
                                </div>
                                </a>
                                <?php endforeach ?>
                            </div>
                        
                        <!-- akhir konten rekomendasi -->
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
<style>
    /* * css thumnil */ 
            .gambar {
                opacity: 1;
                display: block;
                width: 100%;
                height: auto;
                transition: .5s ease;
                backface-visibility: hidden;
            }

            .middle {
                transition: .5s ease;
                opacity: 0;
                position: absolute;
                top: 50%;
                left: 38%;
                transform: translate(-40%,-40%);
                -ms-transform: translate(-40%, -40%);
                text-align: center;
            }

            .container:hover .image {
                opacity: 0.3;
            }

            .container:hover .middle {
                opacity: 1;
            }

            .text {
                background-color: #F50F0F;
                color: white;
                border-radius:40px;
                font-size: 16px;
                padding: 16px 32px;
                
            }
           /* css thumnil */
</style>