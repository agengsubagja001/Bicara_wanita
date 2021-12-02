<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
    <!-- section banner infografik -->
    <section>
        <div class="vid container" style="max-width: 1540px;">
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
                <div class="mt-5 mb-2">
                   <span class="one" style="">Vidio One Minute</span>
                </div> 
                <div class="row">
                    <?php foreach ($show_vidio1 as $vidio): ?>
                    <!-- konten infografik -->
                    <div class="col-6 col-md-4 mt-2">
                        <a href="<?php echo base_url().'halaman_utama/isi_vidio/'.$vidio->id_vidio ?>">
                            <img class="img-responsive " src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" style="object-fit:cover; width: 100%; height: auto;">
                        </a>
                        <div class="middle">
                            <div class="text"><i class="fa fa-play" aria-hidden="true"></i></div>
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
                padding: 23px 23px;
                width: 70px;
                height:70px;
                text-align: center;
                
            }
           /* css thumnil */
           .paralax{
				background-image: url("<?php echo base_url('assets/img/vidio.png') ?>");
				min-height: 500px; 
				width: 100%;
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				/* horizontal-align: middle; */
			}
</style>