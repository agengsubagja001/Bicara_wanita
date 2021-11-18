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
                                    <?php foreach($show_edit as $edit): ?>
                                    <form action="<?php echo base_url(). 'penulis/profil/update';?>" method="post" enctype="multipart/form-data">
                                        <div class="col-md-12 mb-4 text-center">
                                            <!-- awal masukan foto -->
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload Foto Profil</label>
                                                <input type="file" name="foto_profil" value="<?php echo $edit->foto_profil ?>" class="form-control-file" id="exampleFormControlFile1">
                                                <input type="hidden" name="id_akun" value="<?php echo $edit->id_akun ?>">
                                            </div>
                                            <!-- akhir masukan foto -->
                                        </div>
                                        <!-- awal masukan nama -->
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" value="<?php echo $edit->nama_lengkap ?>" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Kamu">
                                        </div>
                                        <br>
                                        <!-- akhir masukan nama -->
                                        <!-- awal biography -->
                                        <div class="form-group">
                                            <label>Biography</label>
                                            <input type="text" value="<?php echo $edit->deskripsi ?>" name="deskripsi" class="form-control" placeholder="Masukan Biography">
                                        </div>
                                        <br>
                                        <!-- akhir biography -->
                                        <!-- awal nomer hp -->
                                        <div class="form-group">
                                            <label>Nomer Hp</label>
                                            <input type="text" value="<?php echo $edit->no_telepon ?>" name="no_telepon" class="form-control" placeholder="Masukan Nomer Hp">
                                        </div>
                                        <br>
                                        <!-- akhir nomer hp -->
                                        <!-- awal facebook -->
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" value="<?php echo $edit->facebook ?>" name="facebook" class="form-control" placeholder="Masukan Facebook">
                                        </div>
                                        <br>
                                        <!-- akhir facebook -->
                                        <!-- awal twiter -->
                                        <div class="form-group">
                                            <label>twiter</label>
                                            <input type="text" value="<?php echo $edit->twiter ?>" name="twiter" class="form-control" placeholder="Masukan Twiter">
                                        </div>
                                        <br>
                                        <!-- akhir twiter -->
                                        <!-- awal Medium -->
                                        <div class="form-group">
                                            <label>Medium</label>
                                            <input type="text" value="<?php echo $edit->no_telepon ?>" name="medium" class="form-control" placeholder="Masukan Medium">
                                        </div>
                                        <br>
                                        <!-- akhir medium -->
                                        <!-- button simpan -->
                                        <div class="col-md-12 text-center">
                                           <button type="submit" name="btn_submit" class="btn btn-dark">Simpan</button>
                                        </div>
                                        <!-- akhir button simpan -->
                                    </form>  
                                    <?php endforeach ?> 
                            </div>
                          </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
      