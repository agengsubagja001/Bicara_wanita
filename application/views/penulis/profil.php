<!-- HEAD -->
<?php $this->load->view('penulis/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('penulis/partial/navbar') ?>
        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('penulis/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <?php foreach($show_profil as $profil): ?>
                                <div class="row container">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td><img src="<?php echo base_url().'assets/penulis/p_profil/'. $profil->foto_profil ?>" style="width:100px; height:100px; object-fit: cover;" class="img-fluid"></td>
                                                <td><span style="margin: 20px;"><?php echo $profil->nama_lengkap ?></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <span>Nama Lengkap</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <span style="color:#888;"><?php echo $profil->nama_lengkap ?></span>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <span>Biografi</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <span style="color:#888;"><?php echo $profil->deskripsi ?></span>
                                    </div>
                                    <div class="col-md-12 mt-5">
                                        <span>No telepon</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <span style="color:#888;"><?php echo $profil->no_telepon ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <a href="<?php echo base_url().'penulis/profil/edit/'.$profil->id_akun ?>"><button style="width:90px;" class="btn btn-dark">Edit</button></a>
                                    </div>
                                </div>  
                            <?php endforeach ?>
                        </div>
                      
                    </div>
                </main>
            </div>
        </div>
        
      