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
                     <div class="col-md-12 mb-5">
                        <span style="font-family: Poppins; font-style: normal; font-weight: 600; font-size: 30px; text-transform: capitalize;"><?php echo $detail->judul ?></span>
                     </div>  
                    </div>
                </div>
                <!-- akhir vidio play -->
                <!-- vidio rekomendasi -->
                <div class="col-md-5" style="position: relative;bottom:25px;">
                        <!-- awal konten rekomndasi -->
                            <div class="col-md-12">
                                <?php foreach ($terbaru1 as $new) : ?>
                                   <a href="<?php echo base_url().'halaman_utama/isi_vidio/'.$new->id_vidio ?>" style="text-decoration: none;">
                                    <div class="row row-no-gutters">
                                        <div class="col-md-7 mt-4">
                                            <img class="img-fluid" style="margin-top:4px  width:100%;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $new->gambar_thubnail ?>" alt="">
                                            <div class="middle">
                                                <div class="text"><i class="fa fa-play" aria-hidden="true"></i></div>
                                            </div>  
                                        </div>
                                        <div class="col-md-5 mt-4">
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
    </section>
    <div class="fotter" style="position: relative; top: 20px;">
        <?php $this->load->view('partial/footer') ?> 
    </div>

</body>
<style>
   /* css thumnil */
            
            .middle {
                transition: .5s ease;
                opacity: 30%;
                position: absolute;
                background-color: #4C4C4C;
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
                font-size: 16px;
                padding: 16px 32px;
                
            }
           /* css thumnil */
</style>