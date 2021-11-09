<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<body>
<!-- Awal Section Artikel -->
    <section>
        <div class="container" style="max-width: 1340px;">
        
            <div class="row">
                <!-- judul  -->
                <div class="col-md-12 text-center">
                    <h1 style="position: relative; top: 80px; font-family: Poppins; font-style: normal; font-weight: bold; font-size: 32px; color: #333333;"><?php echo $detail->judul ?></h1>
                </div>
                <!-- akhir judul -->
                <!-- awal konten artikel -->
                <div class="col-md-12 text-center mt-5">
                    <img src="<?php echo base_url().'assets/img_Sampul/'. $detail->gambar ?>" style="position: relative; top: 50px; width: 80%; height: auto" alt="">
                </div>
                <div class="col-md-12">
                    <p style="position: relative; top: 100px; white-space: pre-wrap; color: rgba(0,0,0,.8); font-size: .875rem; overflow: hidden; text-overflow: ellipsis; line-height: 1.875rem;"><?php echo $detail->isi ?></p>
                </div>
                <div class="col-md-12" style="position: relative; top: 140px;">
                    <a href="#"><button type="button" style=" border: 1px solid #F7476E; background: #F7476E; border-radius: 10px "><?php echo $detail->kategori ?></button></a>
                </div>
                <!-- conten bagikan -->
                <div class="col-md-2" style="position: relative; top: 150px;">
                    <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 24px;">Bagikan</span>
                    <div class="row">
                     <div class="col-md-12">
                     <table>
                          <tr>
                              <td><a href="#"style="color:black; text-decoration: none;"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></td>
                              <td><a href="#" style="color:black; text-decoration: none;"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></td>
                              <td><a href="#" style="color:black; text-decoration: none;"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a></td>
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
<!-- Akhir Section Artikel -->
<!-- awal section penulis -->
    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="row">
                <div class="col-md-12">
                <hr style="position: relative; top: 140px;">
                <div class="row">
                    <div class="col-md-6 mt-3" style="position: relative; top: 140px;">
                        <div class="story">
                            <div class= "row">
                            <div class="col-md-2">
                                <img src="assets/img/ikon.png" class="img-fluid" style="width:70px; height:70px;" alt="">
                            </div>
                            <div class="col-md-10 mt-2">
                                <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Pamungkas Setia</span>
                                <div class="mb-2"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr style="position: relative; top: 140px;">
                </div>
            </div>
        </div>
    </section>
<!-- akhir section penulis -->
<!-- awal section artikel terbaru 1-->
    <section>
            <div class="container" style="max-width: 1340px; position: relative; top: 140px;">
                <div class="mb-3">
                <span style="font-size:30px;font-weight:bold ">Artikel Terbaru</span>
                </div>
                <!-- artikel -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- awal artikel untuk di lopping -->
                            <?php foreach($terbaru as $new): ?>
                            <div class="col-md-4">
                                <!-- Conten Artikel -->
                                    <div class="row">
                                        <div class="col-md-6 mt-3">
                                            <img src="<?php echo base_url().'assets/img_Sampul/'. $new->gambar ?>" style="width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <div class="bulet" style="border-radius:100%; width: 15px; height: 15px; background: #F7476E;"> <span style="position: relative; left:25px; bottom:6px;"><?php echo $new->kategori ?></span></div>
                                            <a href="<?php echo base_url().'halaman_utama/detail_blog/'.$new->id_blog ?>" style="color:black; text-decoration: none;">
                                                <div class="mt-2">
                                                <span style="font-family: Roboto; font-style: normal; font-weight: bold; font-size: 28px; line-height: 30px;"><?php echo $new->judul ?></span>
                                                </div>
                                            </a>
                                            <div class="mt-4">
                                                <span style="font-family: Poppins; font-style: normal; font-weight: 300; font-size: 14px; line-height: 21px;"><?php echo $new->date ?></span>
                                            </div>
                                        </div> 
                                    </div>
                                    <hr>
                                    <!-- Akhir Content Artikel -->
                            </div>
                            <?php endforeach ?>
                            <!-- Akhir Content Artikel -->  

                        </div>
                    </div>
                </div>
                <!-- akhir artikel -->
            </div>
            <div class="mt-5"></div>      
    </section>
<!-- akhir section artikel terbaru -->
<!-- section komentar -->
    <section>
        <div class="container" style=" max-width: 1340px; position: relative; top: 140px;">
            <div class="mb-3">
               <span style="font-size:30px;font-weight:bold ">Komentar</span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- awal content Komentar -->
                        <div class="col-md-6 mt-3">
                            <div class="komen">
                                <div class= "row">
                                <div class="col-md-2">
                                    <img src="assets/img/ikon.png" class="img-fluid" style="width:70px; height:70px;" alt="">
                                </div>
                                <div class="col-md-10 mt-2">
                                    <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Udin Jamaludin</span>
                                    <div class="mb-2"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                                </div>
                                </div>
                            </div>
                        </div>
                         <!-- akhir content story -->
                        <div class="col-md-6 mt-3">
                            <div class="komen">
                                <div class= "row">
                                <div class="col-md-2">
                                    <img src="assets/img/ikon.png" class="img-fluid" style="width:70px; height:70px;" alt="">
                                </div>
                                <div class="col-md-10 mt-2">
                                    <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Udin Jamaludin</span>
                                    <div class="mb-2"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                                </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-12 text-center mt-5">
                           <textarea style="width: 100%;" rows="10" name="comment" id="comment" placeholder="Tambahkan Komentar"></textarea>
                       </div>
                       <div class="col-md-12 text-right">
                          <input style="background: #F7476E; border-radius: 15px; text-white" type="submit" name="submit" value="Kirim">
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- akhir section komentar -->
<br>
<br>
</body>
<div class="fotter" style="position: relative; top: 140px;">
<?php $this->load->view('partial/footer') ?> 
</div>

