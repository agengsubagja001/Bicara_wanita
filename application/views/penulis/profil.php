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
                                                <td><span style="font-weight: 500; font-size: 16px; margin: 20px;"><?php echo $profil->nama_lengkap ?></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">Nama Lengkap</span>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->nama_lengkap ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">Biografi</span>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->deskripsi ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">No telepon</span>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->no_telepon ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">Facebook</span>
                                    </div>                                   
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->facebook ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">Twitter</span>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->twitter ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span style="font-weight: 500; font-size: 16px;">Medium</span>
                                    </div>
                                    <div class="col-md-12 mt-1">
                                        <span style="color:#777;"><?php echo $profil->medium ?></span>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <a href="<?php echo base_url().'penulis/profil/edit/'.$profil->id_akun ?>"><button style="width:90px;" class="btn btn-dark">Edit</button></a>
                                    </div>
                                </div>  
                            <?php endforeach ?>
                        </div>
                      
                    </div>
                </main>

                 <!-- footer -->
                 <?php $this->load->view('penulis/partial/footer') ?>
                <!-- Akhir footer -->

                <!-- sweetalert tambah-->
                <?php if ($this->session->flashdata('success')): ?>
                    <script>
                        swal("Data tersimpan", "Data berhasil di tambahkan !", "success");
                    </script>
                <?php endif; ?>
                <!--akhir sweetalert -->

                <!-- sweetalert hapus -->
                <?php if ($this->session->flashdata('success1')): ?>
                    <script>
                        swal("Data terhapus", "Data berhasil di hapus!", "success");
                    </script>
                <?php endif; ?>
                <!--akhir sweetalert -->

                <!-- Sweetalert edit -->
                <?php if ($this->session->flashdata('success1')): ?>
                    <script>
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'berhasil di edit',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    </script>
                 <?php endif; ?>

                <!-- akhir sweetalert edit -->
            </div>
        </div>
        
      