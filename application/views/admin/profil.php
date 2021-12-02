<!-- HEAD -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>
        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mb-4">
                           
                        <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <?php foreach($show_profil as $profil): ?>
                                <div class="card-header">
                                    <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                        <a class="navbar-brand">
                                            <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 100; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">PROFIL ADMIN</b>
                                        </a>
                                            <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 140px;">Tambah Admin</button>
                                    </nav>
                                </div>
                                <div class="row container" style="margin-top: 15px;">
                                    <div class="col-md-12">
                                        <table>
                                            <tr>
                                                <td><img src="<?php echo base_url().'assets/admin/p_profil/'. $profil->foto_profil ?>" style="width:100px; height:100px; object-fit: cover;" class="img-fluid"></td>
                                                <!-- <td><span style="font-weight: 500; font-size: 16px; margin: 20px;"><?php echo $profil->nama_lengkap ?></span></td> -->
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-12 mt-2">
                                        <span style="font-weight: 600; font-size: 17px;"><?php echo $profil->nama_lengkap ?></span>
                                    </div>

                                    <hr style="width:200px">

                                    <div class="col-md-12 mt-3">
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
                                        <a href="<?php echo base_url().'admin/profil/edit/'.$profil->id_akun ?>"><button style="width:90px;" class="btn btn-dark">Edit</button></a>
                                    </div>
                                </div>  
                            <?php endforeach ?>
                        </div>
                      
                    </div>
                    <!-- modal tambah akun -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?php echo base_url(). 'admin/profil/upload'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 text-center">
                                        <label class=newbtn>
                                            <img id="blah" src="<?php echo base_url('assets/img/img.png') ?>" style="width: 180px;object-fit: contain;">
                                            <input required id="pic" name="foto_profil" class="pis" onchange="readURL(this);" type="file" >
                                            <br>
                                            <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih foto profil</span>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                        <input required type="text" class="form-control" placeholder="Masukan nama lengkap" name="nama_lengkap" id="recipient-name">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Username</label>
                                        <input required type="text" placeholder="Masukan Username" class="form-control" name="username" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                        <input required type="text" class="form-control" placeholder="Masukan deskripsi singkat penulis" name="deskripsi" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">No Telepon</label>
                                        <input required type="text" placeholder="Masukan no telepon" class="form-control" name="no_telepon" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">facebook</label>
                                        <input required type="text" placeholder="Masukan link akun facebook" class="form-control" name="facebook" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Twitter</label>
                                        <input required type="text" placeholder="Masukan link akun twitter" class="form-control" name="twitter" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Medium</label>
                                        <input required type="text" placeholder="Masukan link akun medium" class="form-control" name="medium" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Password</label>
                                        <input required type="password" placeholder="Masukan password" class="form-control" name="password" id="recipient-name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="btn_submit" class="btn btn-dark">Submit</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>

                 <!-- footer -->
                 <?php $this->load->view('admin/partial/footer') ?>
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

                
                 <!-- Script untuk gambar foto profil-->
                 <script>
                    $('.newbtn').bind("click" , function () {
                        $('#pic').click();
                    });
                    
                    function readURL(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();

                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                </script>
                <!-- Akhir Script -->
            </div>
        </div>
        
      