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
            
                    <div class="col-md-12 text-center">
                       <!-- awal detail penulis -->
                        <img src="<?php echo base_url().'assets/penulis/p_profil/'. $detail->foto_profil ?>" class="img-fluid" style="object-fit:cover; width:150px; height:150px; border-radius: 50%;"  alt="">
                        <h1 class="mt-3"><?php echo $detail->nama_lengkap ?></h1>
                        <a href="<?php echo $detail->facebook ?>"><button type="button" class="btn btn-social-icon btn-facebook btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-facebook-official"></i></button></a>
                        <a href="<?php echo $detail->twitter ?>"><button type="button" class="btn btn-social-icon btn-instagram btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-twitter" aria-hidden="true"></i></button></a>
                        <a href="<?php echo $detail->medium ?>"><button type="button" class="btn btn-social-icon btn-wa btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-medium" aria-hidden="true"></i></button></a>
                        <!-- akhir detail penulis -->
                        <hr>
                    </div>
                    <!-- awal tentang penulis -->
                    <div class="col-md-12 text-center">
                        <p style="text-align: center;"><?php echo $detail->deskripsi ?></p>
                    </div>
                    <!-- akhir tentang penulis -->
              
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
