<!-- head -->
<?php $this->load->view('partial/head'); ?>

<?php 
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $web = "www.bicarawanita.com";
    // $posting = $_GET['posting'];
?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<body>
<!-- Awal Section Artikel -->

    <section>
        <div class="container" style="max-width: 1340px;">
            <div class="row">
                <!-- judul  -->

                <div class="col-md-12 text-center mt-5">
                    <h1 class="dblog" style=""><?php echo $detail->judul ?></h1>
                </div>
                <!-- akhir judul -->
                <!-- awal konten artikel -->
                <div class="col-md-12 text-center mt-5">
                    <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $detail->gambar ?>" style="object-fit:cover; width: 80%; height: auto" alt="">
                </div>
                <div class="col-md-12" style="line-height: 1.875em; color:#444; margin-top: 4%;">
                    <p class="disi" style="position: relative; top: 100px; white-space: pre-wrap; font-size: 0.875em; overflow: hidden; text-overflow: ellipsis; line-height: 1.875rem;"><?php echo $detail->isi ?></p>
                </div>
                <div class="col-md-12 mt-5">
                    <a href="<?php echo base_url().'halaman_utama/detail_kategori?id='.$detail_kategori->id_kategori ?>" style="text-decoration: none; color:white; padding:1px;  "><button type="button" style=" border: 1px solid #F7476E; background: #F7476E; border-radius: 10px "><?php echo $detail_kategori->kategori ?></a>
                </div>
                <!-- conten bagikan -->
                <div class="col-md-2 mt-4">
                    <span style="font-family: Poppins; font-style: normal; font-weight: normal; font-size: 20px;">Bagikan</span>
                    <div class="row">
                     <div class="col-md-12 mt-2">
                     <table>
                          <tr>
                              <td><a href="https://www.facebook.com/sharer.php?u=<?php echo site_url().'halaman_utama/detail_blog/'.$detail->id_blog ?>" target="_blank"><button type="button" class="btn btn-social-icon btn-facebook btn-rounded " style="width: 50px; height: 50px; padding: 1; border-radius: 50px;" ><i class="fa fa-facebook-official"></i></button></a></td>
                              <td><a href="https://twitter.com/intent/tweet?text=<?php echo $detail->judul?>%0AKlik%20Untuk%20melihat%20selengkap%20nya%20Kunjungi%20web%20resmi%20kami%20<?php echo site_url().'halaman_utama/detail_blog/'.$detail->id_blog ?>"><button type="button" class="btn btn-social-icon btn-twitter btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px;"><i class="fa fa-twitter"></i></button></a></td>
                              <td><a href="https://wa.me/?text=<?php echo $detail->judul?>%0AKlik%20Untuk%20melihat%20selengkap%20nya%20Kunjungi%20web%20resmi%20kami%20<?php echo site_url().'halaman_utama/detail_blog/'.$detail->id_blog ?>" target="_blank"><button type="button" class="btn btn-social-icon btn-wa btn-rounded" style="width: 50px; height: 50px; padding: 1; border-radius: 50px;"><i class="fa fa-whatsapp"></i></button></a></td>
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
                <hr>
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <a style="text-decoration: none; color:black;" href="<?php echo base_url().'halaman_utama/detail_penulis/'. $detail->id_akun ?>">
                            <div class="penulis">
                                <div class= "row">
                                <div class="col-md-2">
                                    <img src="<?php echo base_url().'assets/penulis/p_profil/'. $data_penulis->foto_profil ?>" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
                                </div>
                                <div class="col-md-10 mt-2">
                                    <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 1.27em; line-height: 29px;"><?php echo $data_penulis->nama_lengkap ?></span>
                                    <div class="mb-2"><span style="font-size:1em;"><?php echo $data_penulis->deskripsi ?></span></div>
                                </div>
                                </div>
                                
                            </div>
                        </a>    
                    </div>
                </div>
                <hr>
                </div>
            </div>
        </div>
    </section>

<!-- akhir section penulis -->
<!-- awal section artikel terbaru 1-->
    <section>
            <div class="container" style="max-width: 1340px;">
                <div class="mb-3">
                <span style="font-size:1.5em;font-weight:600; ">Artikel Terbaru</span>
                </div>
                <!-- artikel -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <!-- awal artikel untuk di lopping -->
                            <?php foreach($terbaru as $new): ?>    
                            <div class="col-md-4">
                                <!-- Conten Artikel -->
                                <div class="ukuran">
                                    <div class="row">
                                        <div class="col-md-12 mt-3">
                                            <img src="<?php echo base_url().'assets/admin/blog/img_sampul/'. $new->gambar ?>" style="object-fit:cover; width: 100%; height: auto;" alt="">
                                        </div>
                                        <div class="col-md-12 mt-2">
                                            <a class="judul" href="<?php echo base_url().'halaman_utama/detail_blog/'.$new->id_blog ?>"style="color:black; text-decoration: none;">
                                                <div class="mt-2">
                                                  <span><?php echo $new->judul ?></span>
                                                </div>
                                            </a>
                                            <div class="mt-4">
                                                <table>
                                                    <tr>
                                                        <td>
                                                          <div class="bulet" style="text-transform: capitalize; border-radius:100%; width: 15px; height: 15px; background: #F7476E;"></div>
                                                        </td>
                                                        <td style="color:#666; position: relative; left:10px; bottom:2px;">
                                                          <span><?php echo $new->kategori ?></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="mt-4">
                                                <span style="color:#666; font-family: Poppins; font-style: normal; font-weight: 300; font-size: 14px; line-height: 21px;"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $new->date ?></span>
                                            </div>
                                            
                                        </div> 
                                    </div>
                                    <hr>
                                </div>    
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
        <div class="container" style="max-width: 1340px;">
            <div class="mb-3">
               <span style="font-size:1.5em;font-weight:600; ">Komentar</span>
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
                                    <img src="assets/img/ikon.png" class="img-fluid" style="object-fit:cover; width:70px; height:70px;" alt="">
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
                        <h5><?php $this->session->userdata('access_token') ?></h5>
                        <div class="col-md-12 text-right">
                            <?php 
                                if(!isset($login_button)){
                                    echo'
                                <button style="margin: 5px; background: #F7476E; border-radius: 15px; border: 1px solid #F7476E; color: #FFFFFF;" type="button" name="submit" value="Login">login</button>
                                ';
                                echo '<script>console.log("masuk"); </script>';
                                } else
                                {
                                    echo'<div class="col-md-12 text-right">'.$login_button.'</div>';
                                }
                                echo '<script>console.log("testing"); </script>';

                            ?>
                            <!-- <div class="col-md-12 text-right">
                                <button style="margin: 5px; background: #F7476E; border-radius: 15px; border: 1px solid #F7476E; color: #FFFFFF;" type="submit" name="submit" value="Login">Login</buuton>
                            </div> -->
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
<div class="fotter">
<?php $this->load->view('partial/footer') ?> 
</div>

