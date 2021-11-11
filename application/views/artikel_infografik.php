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
                <div class="col-md-12 text-center">
                    <h1 style="position: relative; top: 80px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 32px; color: #333333;"><?php echo $detail->judul ?></h1>
                </div>
                <!-- akhir judul -->
                <!-- awal konten artikel infografik -->
                <div class="col-md-12 text-center mt-5">
                    <img src="<?php echo base_url().'assets/admin/infografik/img_sampul/'. $detail->gambar_sampul ?>" style="position: relative; top: 50px; width: 80%; height: auto" alt="">
                </div>
                <div class="col-md-12">
                    <p style="position: relative; top: 100px; white-space: pre-wrap; color: rgba(0,0,0,.8); font-size: .875rem; overflow: hidden; text-overflow: ellipsis; line-height: 1.875rem;"><?php echo $detail->isi ?></p>
                </div>
                <div class="col-md-12" style="position: relative; top: 140px;">
                <a href="#" style="text-decoration: none; color:white; padding:1px;  "><button type="button" style=" border: 1px solid #F7476E; background: #F7476E; border-radius: 10px ">Infografik</a>
                </div>
                <!-- conten bagikan -->
                <div class="col-md-2" style="position: relative; top: 150px;">
                    <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 24px;">Bagikan</span>
                    <div class="row">
                     <div class="col-md-12">
                     <table>
                          <tr>
                              <td><a href="#"style="color:black; text-decoration: none;"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></td>
                              <td style="position: relative; left:8px;"><a href="#" style="color:black; text-decoration: none;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></td>
                              <td style="position: relative; left:15px;"><a href="#" style="color:black; text-decoration: none;"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></td>
                          </tr>
                      </table>
                     </div>
                    </div>
                </div>
                <!-- akhir konten bagikan -->
                <!-- akhir konten artikel infografik-->
            </div>
            <div class="hrku" style="position: relative; top: 150px;">
              <hr>
            </div>
        </div>
    </section> 
    <!-- fotter -->
    <div class="fotter" style="position: relative; top: 180px;">
        <?php $this->load->view('partial/footer') ?> 
    </div>

       
</body>