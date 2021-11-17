<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<body>
    <!-- section banner infografik -->
    <section>
        <div class="container" style="max-width: 1540px;">
            <div class="row">
                <div class="col-md-12">
                  <div class="paralax"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section banner infografik -->
    <!-- awal section konten infografik -->
        <section>
            <div class="container" style="max-width: 1340px;" >
                <div class="mb-3">
                   <span style="font-size:30px;font-weight:bold">Vidio One Minute</span>
                </div> 
                <div class="row">
                    <?php foreach ($show_vidio1 as $vidio): ?>
                    <!-- konten infografik -->
                    <div class="col-6 col-md-4 mt-5">
                        <a href="<?php echo base_url().'halaman_utama/isi_vidio/'.$vidio->id_vidio ?>">
                            <img class="img-responsive " src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" style="object-fit:cover; width: 100%; height: auto;">
                        </a>
                        <div class="middle">
                            <div class="text">Play</div>
                        </div>
                    </div>
                    <!-- akhir konten infografik -->
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    <!-- akhir section konten infografik -->
</body>
<br>
<br>
<!-- footer -->
<?php $this->load->view('partial/footer') ?> 
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
                left: 50%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
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