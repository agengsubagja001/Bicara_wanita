<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<body>
<section>
        <div class="container" style="max-width: 1340px;">

            
            <div class="row">
                <!-- judul  -->
                <div class="col-md-12 text-center mt-5">
                    <h1 style="font-family: Poppins; font-style: normal; font-weight: bold; font-size: 32px; color: #333333;"><?php echo $detail->judul ?></h1>
                </div>
                <!-- akhir judul -->
                <!-- awal konten artikel program -->
                <div class="col-md-12 text-center mt-5">
                    <img src="<?php echo base_url().'assets/admin/program/img_Sampul/'. $detail->gambar_sampul ?>" style="width: 80%; height: auto" alt="">
                </div>
                <div class="col-md-12 mt-5">
                    <p style="white-space: pre-wrap; color: rgba(0,0,0,.8); font-size: .875rem; overflow: hidden; text-overflow: ellipsis; line-height: 1.875rem;"><?php echo $detail->isi ?></p>
                </div>
                <div class="col-md-12 mt-5">
                    <a href="#" style="text-decoration: none; color:white; padding:1px;  "><button type="button" style=" border: 1px solid #F7476E; background: #F7476E; border-radius: 10px ">Program</a>
                </div>
                <!-- conten bagikan -->
                <div class="col-md-2 mt-4">
                    <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 24px;">Bagikan</span>
                    <div class="row mt-3">
                     <div class="col-md-12">
                     <table>
                          <tr>
                              <td><a href="https://www.facebook.com/sharer.php?u=<?php echo site_url().'halaman_utama/detail_program/'.$detail->judul?>" target="_blank"><button type="button" class="btn btn-social-icon btn-facebook btn-rounded " ><i class="fa fa-facebook-official"></i></button></a></td>
                              <td><a href="http://www.instagram.com/sharer.php?url=<?php echo site_url().'halaman_utama/detail_program/'.$detail->id_program  ?>"><button type="button" class="btn btn-social-icon btn-instagram btn-rounded"><i class="fa fa-instagram"></i></button></a></td>
                              <td><a href="https://wa.me/?text=<?php echo $detail->judul?>%0AKlik%20Untuk%20melihat%20selengkap%20nya%20Kunjungi%20web%20resmi%20kami%20<?php echo site_url().'halaman_utama/detail_program/'.$detail->id_program  ?>" target="_blank"><button type="button" class="btn btn-social-icon btn-wa btn-rounded"><i class="fa fa-whatsapp"></i></button></a></td>
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
    <!-- fotter -->
    <div class="fotter" style="position: relative; top: 180px;">
        <?php $this->load->view('partial/footer') ?> 
    </div>
</body>
<!-- css button -->  