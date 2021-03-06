<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
    <!-- awal section banner -->
    <section>
        <div class="sty container" style="max-width: 1540px;">
            <div class="row">
                <div class="col-md-12">
                 <div class="paralax"></div> 
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section banner -->
    <!-- awal section konten story-->
    <section>
        <div class="container"style="max-width: 1340px;">
            <div class="row">
                <div class="col-md-4 mt-5">
                    <span style="font-size:1.875em;font-weight:600;">Story</span>
                </div> 
                <div class="col-md-8 mt-5 text-right">
                    <span style="font-size:1.875em; color: #555555;">Post Story mu</span>
                    <div class="row">
                        <div class="col-md-12" style="position: relative; left:-42px;">
                          <a href="<?php echo base_url('form_login/login') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Disini <i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row no-gutters justify-content-center">
                <div class="col-md-8 mt-5">
                    <div class="story" style="width:100%;height:auto;background: #FFFFFF; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border: 1px solid #000000; border-radius: 30px;">
                        <!-- awal konten story -->
                        <?php foreach ($show_story as $story): ?>
                        <a href="<?php echo base_url().'detail_story/artikel_story/'. $story->id_story ?>" style="text-decoration: none; color:black;">
                            <div class="col-md-12 text-center p-5">
                                <div class= "row no-gutters">
                                    <div class="col-md-2">
                                        <img src="assets/img/ikonstory.png" class="img-fluid" style="width:70px; height:70px; border-radius:50%" alt="">
                                    </div>
                                    <div class="col-md-10 mt-2 text-left">
                                        <span style="text-transform:capitalize; font-style: normal;font-weight: 600; font-size: 1.1875em; line-height: 29px;"><?php echo $story->judul_story ?></span>
                                        <div class="mb-2 mt-2" style="color:#444;"><span style="text-transform:capitalize; overflow: hidden; text-overflow: ellipsis;  display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;"><?php echo $story->isi_story ?></span></div>
                                    </div>
                                </div>
                                <div class="col-md-12 text-left" style="margin-top:3px;">
                                    <span style="text-transform:capitalize;"><?php echo $story->nama_lengkap ?></span>
                                </div>
                                <div class="col-md-12">
                                 <hr>
                                </div>
                            </div>
                        </a>
                        <?php endforeach ?>
                        <!-- akhir konten story -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section konten story -->
    <br>
    <br>
</body>
<!-- fotter -->
<?php $this->load->view('partial/footer') ?> 
<style>
     .paralax{
				background-image: url("<?php echo base_url('assets/img/st.png') ?>");
				min-height: 500px; 
				width: 100%;
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				/* horizontal-align: middle; */
			}
</style>