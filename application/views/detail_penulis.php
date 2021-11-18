<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<br>
<body>
    <!-- awal section detail penulis -->
    <section>
         <div class="container" style="max-width:1340px;">
            <div class="row justify-content-center">
            <?php foreach($show_profil as $profil): ?>
                    <div class="col-md-12 text-center">
                       <!-- awal profil penulis -->
                        <img src="<?php echo base_url().'assets/penulis/p_profil/'. $profil->foto_profil ?>" class="img-fluid" style="object-fit:cover; width:150px; height:150px; border-radius: 50%;"  alt="">
                        <h1 class="mt-3"><?php echo $profil->nama_lengkap ?></h1>
                        <a href="<?php echo $profil->facebook ?>"><button type="button" class="btn btn-social-icon btn-facebook btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-facebook-official"></i></button></a>
                        <a href="<?php echo $profil->twiter ?>"><button type="button" class="btn btn-social-icon btn-instagram btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>
                        <a href="<?php echo $profil->medium ?>"><button type="button" class="btn btn-social-icon btn-wa btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-medium" aria-hidden="true"></i></button></a>
                        <p class="mt-3" style="font-family: Roboto; color: #999; font-style: normal; font-weight: bold;"><?php echo $profil->pekerjaan ?></p>
                        <!-- akhir profil penulis -->
                        <hr>
                    </div>
                    <!-- awal tentang penulis -->
                    <div class="col-md-12 text-center">
                        <p style="text-align: center;"><?php echo $profil->deskripsi ?></p>
                    </div>
                    <!-- akhir tentang penulis -->
            <?php endforeach ?>    
            </div>
         </div>    
    </section>    
    <!-- akhir  section detail penulis -->
</body>
<br>
<br>
<br>
<!-- akhir section 8 infografik -->
<?php $this->load->view('partial/footer') ?> 
