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
                        <!-- <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="mt-4 mb-4" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%);border-color: transparent;padding:15px;border-radius:10px">
                            <div class="card-header">
                                <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                    <a class="navbar-brand">
                                        <b style=" left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">LIST VIDIO</b>
                                    </a>
                                    <a href="<?php echo base_url('admin/tambah_vidio') ?>" class="" >
                                        <button class="btn btn-dark " style="width: 140px;">Tambah Baru</button>
                                    </a>
                                </nav>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
                                                <th scope="col">FOTO THUMBNAIL</th>
                                                <!-- <th scope="col">GAMBAR THUMBNAIL</th> -->
												<th scope="col">JUDUL</th>
												<th scope="col">TANGGAL LIRIS</th>
												<th scope="col">AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php $no = 1; foreach($show_vidio as $vidio) : ?>
                                           <!-- Content pertama-->
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td>
                                                    <img style="width:200px; height:auto; object-fit:cover;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" alt="">
                                                </td>
                                                <!-- <td>
                                                    <img style="object-fit:cover; width:200px; height:auto;" src="<?php echo base_url().'assets/admin/vidio/gambar_tubnail/'. $vidio->gambar_thubnail ?>" alt="img-fluid">
                                                </td> -->
												<td style=""><?php echo $vidio->judul ?></td>
												<td><?php echo $vidio->tanggal ?></td>
												<td style="">
                                                    <a href="<?php echo base_url().'admin/vidio/edit/'.$vidio->id_vidio ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-warning"><i style="color:white" class="fas fa-pen"></i></a>
                                                    <a href="<?php echo base_url().'admin/vidio/hapus/'.$vidio->id_vidio ?>" style="margin-top: 4px; padding: 0.25rem 0.5rem;font-size: 0.76563rem;line-height: 1.5;border-radius: 3px;" class="btn btn-danger"><i style="color:white" class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <!-- Akhir kontent pertama -->
                                            <?php endforeach ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
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
                
            </div>
        </div>
        
      