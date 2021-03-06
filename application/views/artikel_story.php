<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
    <!--awal section story -->
        <section>
                <div class="container" style="max-width: 1340px;">
                
                    <div class="row">
                        <!-- judul  -->
                        <div class="col-md-12 text-center mt-5">
                            <h1 class="jdlsty" style=""><?php echo $detail->judul_story ?></h1>
                        </div>
                        <!-- akhir judul -->
                        <!-- gambar -->
                        <div class="col-md-12 text-center mt-3">
                            <img src="<?php echo base_url().'assets/story/img_story/'. $detail->gambar ?>" style="object-fit:cover; width: 80%; height: auto" alt="">
                        </div>
                        <!-- gambar -->
                        <!-- awal konten artikel Story -->
                        <div class="col-md-12 mt-2" style="line-height: 1.875em; color: #444;">
                            <p style="text-transform:capitalize; white-space: pre-wrap; font-size: .875rem; overflow: hidden; text-overflow: ellipsis; line-height: 1.875rem;"><?php echo $detail->isi_story ?></p>
                        </div>
                        <div class="col-md-12 mt-5">
                            <a href="#" style="text-transform:capitalize; text-decoration: none; color:white; padding:1px;  "><button type="button" style=" border: 1px solid #F7476E; background: #F7476E; border-radius: 10px ">Story</a>
                        </div>
                        <!-- conten bagikan -->
                        <div class="col-md-2 mt-4">
                            <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 20px;">Bagikan</span>
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <table>
                                        <tr>
                                            <td><a href="https://www.facebook.com/sharer.php?u=<?php echo base_url().'detail_story/artikel_story/'. $detail->judul_story ?>"><button type="button" class="btn btn-social-icon btn-facebook btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-facebook-official"></i></button></a></td>
                                            <td><a href="https://twitter.com/intent/tweet?text=<?php echo $detail->judul_story?>%0AKlik%20Untuk%20melihat%20selengkap%20nya%20Kunjungi%20web%20resmi%20kami%20<?php echo base_url().'detail_story/artikel_story/'. $detail->id_story ?>"><button type="button" class="btn btn-social-icon btn-twitter btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-twitter"></i></button></a></td>
                                            <td><a href="https://wa.me/?text=<?php echo $detail->judul_story?>%0AKlik%20Untuk%20melihat%20selengkap%20nya%20Kunjungi%20web%20resmi%20kami%20<?php echo base_url().'detail_story/artikel_story/'. $detail->id_story ?>"><button type="button" class="btn btn-social-icon btn-wa btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px"><i class="fa fa-whatsapp"></i></button></a></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- akhir konten bagikan -->
                        <!-- akhir konten artikel -->
                    </div>
                </div>
        </section> 
    <!-- akhir section artikel story -->
</body>
    <!-- fotter -->
    <div class="fotter" style="position: relative; top: 180px;">
        <?php $this->load->view('partial/footer') ?> 
    </div>


