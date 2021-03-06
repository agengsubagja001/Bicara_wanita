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
                <div class="ifg mb-2 mt-4" style="">
                   <span style="">Infografik</span>
                </div> 
                <div class="row">
                    <?php foreach ($show_infografik as $infografik): ?>
                    <!-- konten infografik -->
                    <div class="col-6 col-md-4 mt-3">
                        <a href="<?php echo base_url().'detail_infografik/artikel_infografik/'.$infografik->id_infografik ?>">
                            <img src="<?php echo base_url().'assets/admin/infografik/img_infografik/'. $infografik->gambar_kontent ?>" style="max-width: 100%; max-height: auto;" alt="">
                        </a>
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
    .paralax{
				background-image: url("<?php echo base_url('assets/img/banner_infografik.png') ?>");
				min-height: 500px; 
				width: 100%;
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				/* horizontal-align: middle; */
			}
</style>