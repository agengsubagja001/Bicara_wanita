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
                            <nav class="navbar navbar-light bg-light justify-content-between" style="">
                                <a class="navbar-brand">
                                    <!-- awal konten profil penulis -->
                                    <table>
                                        <tr>
                                            <td style="width: 150px"><img src="<?php echo base_url().'assets/img/ikon.png' ?>" style="width:100px; height:100px; object-fit: cover;" class="img-fluid"></td>
                                            <td><span style="color: rgb(0, 0, 0); font-family: Heebo, sans-serif; font-size: 18px;">Ageng Subagja</span></td>
                                        </tr>
                                    </table>
                                    <!-- akhir konten penulis -->
                                </a>
                                <a href="<?php echo base_url('penulis/edit_profil') ?>" class="" >
                                    <button class="btn btn-dark ">Edit Profil</button>
                                </a>
                            </nav>
                            <br>
                            <center><h1>Konten Kamu</h1></center>
                            <div class="card-body">
                                <table class="table table-bordered" id="datatablesSimple" width="100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">NO</th>
												<th scope="col">JUDUL BLOG</th>
												<th scope="col">TANGGAL LIRIS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <!-- Content pertama-->
                                            <tr>
                                                <!-- awal nomer -->
                                                <td>1</td>
                                                <!-- akhir nomer -->
                                                <!-- judul blog -->
												<td style=""><p>Ketika Kaesang Ajak Nadya Arifta Makan Malam Bersama Raffi Ahmad-Nagita Slavina</p></td>
                                                <!-- akhir judul blog -->
                                                <!-- awal tanggal -->
												<td><p>17/November/2021</p></td>
                                                <!-- akhir tanggal  -->
                                            </tr>
                                            <!-- Akhir kontent pertama -->
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        
      