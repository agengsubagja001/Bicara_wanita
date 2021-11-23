<!-- HEAD -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="mt-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <div class="card-header">
                                <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                    <a class="navbar-brand">
                                        <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #666;">LIST BANNER</b>
                                    </a>
                                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 140px;">Tambah Baru</button>
                                </nav>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">JUDUL BANNER</th>
                                                <th scope="col">FOTO BANNER</th>
                                                <th scope="col">PROGRAM BANNER</th>
												<th scope="col">TANGGAL LIRIS</th>
												<th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php $no = 1; foreach($show_banner as $banner) : ?>
                                           <!-- Content pertama-->
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td style=""><?php echo $banner->judul_banner ?></td>
                                                <td style="width: 150px">
                                                    <img src="<?php echo base_url().'assets/banner/'. $banner->gambar_banner ?>" style="object-contain:cover;" class="img-fluid" alt="">
                                                </td>
                                                <td style=""><?php echo $banner->judul ?></td>
												<td><?php echo $banner->tanggal ?></td>
												<td style="">
                                                    <a href="<?php echo base_url().'admin/banner/edit/'.$banner->id_banner ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-warning"><i style="color:white" class="fas fa-pen"></i></a>
                                                    <a href="<?php echo base_url().'admin/banner/hapus/'.$banner->id_banner ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-danger"><i style="color:white" class="fas fa-trash"></i></a>
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
                        <form action="<?php echo base_url(). 'admin/banner/upload'?>" method="post" enctype="multipart/form-data">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Banner</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 text-center">
                                        <label class=newbtn>
                                            <img id="blah" src="<?php echo base_url('assets/img/img.png') ?>" style="width: 100%;object-fit: contain;">
                                            <input id="pic" name="gambar_banner" class="pis" onchange="readURL(this);" type="file" >
                                            <br>
                                            <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih gambar banner</span>
                                        </label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Judul Banner</label>
                                        <input type="text" placeholder="Masukan judul banner" class="form-control" name="judul" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kategori" class="col-form-label">Pilih Program</label>
                                        <select name="program" id="" class="form-control">
                                        <option value="">Pilih Program</option>
                                            <?php foreach($show_program as $program): ?>
                                            <option value="<?php echo $program->id_program ?>"><?php echo $program->judul ?></option>
                                            <?php endforeach ?>
                                        </select>
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
                
                 <!-- Script untuk gambar sampul-->
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
        
      