<!-- HEAD -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mb-5">
                        <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <div class="card-header">
                                <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                    <a class="navbar-brand">
                                        <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">AKUN PENULIS</b>
                                    </a>
                                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 140px;">Tambah Baru</button>
                                </nav>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">FOTO PROFIL</th>
                                                <th scope="col">NAMA LENGKAP</th>
                                                <th scope="col">DESKRISPI</th>
												<th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php $no = 1; foreach($show_penulis as $penulis) : ?>
                                           <!-- Content pertama-->
                                            <tr>
                                                <td style="width:100px;"><?php echo $no++ ?></td>
                                                <td>
                                                    <img style="width:150px; height:auto; object-fit: cover;" src="<?php echo base_url().'assets/penulis/p_profil/'. $penulis->foto_profil ?>" alt="">
                                                </td>
												<td style="text-transform:capitalize;"><?php echo $penulis->nama_lengkap ?></td>
                                                <td style="text-transform:capitalize;"><?php echo $penulis->deskripsi ?></td>
												<td style="">
                                                    <!-- <a href="<?php echo base_url().'admin/akun_penulis/edit/'.$penulis->id_akun ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-warning"><i style="color:white" class="fas fa-pen"></i></a> -->
                                                    <a href="<?php echo base_url().'admin/akun_penulis/hapus/'.$penulis->id_akun ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-danger"><i style="color:white" class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!-- Akhir kontent pertama -->
                                            <?php endforeach ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal tambah data -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?php echo base_url(). 'admin/akun_penulis/upload'?>" method="post" enctype="multipart/form-data">
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
                                            <input id="pic" required name="foto_profil" class="pis" onchange="readURL(this);" type="file" >
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
                    <!-- Akhir Modal Tambah Data -->
                </main>

                <!-- Modal edit kategori -->
                <!-- <?php foreach($show_edit as $edit): ?>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?php echo base_url(). 'admin/kategori/upload_edit'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">kategori</label>
                                        <input type="text" value="<?php echo $edit->kategori ?>" class="form-control" name="kategori" id="recipient-name">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach ?> -->
                <!--Akhir Modal edit kategori-->

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
        
      