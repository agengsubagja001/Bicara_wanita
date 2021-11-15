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