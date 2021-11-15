<!-- HEAD -->
<?php $this->load->view('penulis/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('penulis/partial/navbar') ?>
<br>
<br>
        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('penulis/partial/sidebar') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <center><h1>Edit Profil</h1></center>
                        <div class="mt-4 p-5" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                          <div class="row">
                            <div class="col-md-12">
                                
                                    <form action="<? echo base_url('profil/upload/') ?>" method="post" enctype="multipart/form-data">
                                        <div class="col-md-12 mb-4 text-center">
                                            <!-- awal masukan foto -->
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload Foto Profil</label>
                                                <input type="file" value="" class="form-control-file" id="exampleFormControlFile1">
                                            </div>
                                            <!-- akhir masukan foto -->
                                        </div>
                                        <!-- awal masukan nama -->
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" value="" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Kamu">
                                        </div>
                                        <br>
                                        <!-- akhir masukan nama -->
                                        <!-- awal biography -->
                                        <div class="form-group">
                                            <label>Biography</label>
                                            <input type="text" value="" name="deskripsi" class="form-control" placeholder="Masukan Biography">
                                        </div>
                                        <br>
                                        <!-- akhir biography -->
                                        <!-- awal nomer hp -->
                                        <div class="form-group">
                                            <label>Nomer Hp</label>
                                            <input type="text" value="" name="no_telepon" class="form-control" placeholder="Masukan Nomer Hp">
                                        </div>
                                        <br>
                                        <!-- akhir nomer hp -->
                                        <!-- button simpan -->
                                        <div class="col-md-12 text-center">
                                           <button type="submit" class="btn btn-dark">Simpan</button>
                                        </div>
                                        <!-- akhir button simpan -->
                                    </form>  
                                    
                            </div>
                          </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
      