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

                        <!-- kontent -->
                        <nav class="mt-3 navbar navbar-light bg-light justify-content-between" style="background-color: #dfe5f1!important;}">
                            <a class="navbar-brand">
                                <b style="margin-left:20px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 25px; line-height: 37px; display: flex; align-items: center; color: #666;">ADD PROGRAM</b>
                            </a>
                        </nav>
                        <form action="<?php echo base_url(). 'admin/program/upload/'?>" method="post" enctype="multipart/form-data">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <!-- input Judul -->
                                            <div class="col-md-12 p-2">	
                                                <div class="form-group" style="margin-bottom: 1rem;">
                                                    <input type="hidden" name="id_blog" value="">
                                                    <input type="text" name="judul" class="form-control" placeholder="Masukan Judul">
                                                </div>
                                            </div>
                                            <!-- akhir input judul -->
                                            <div class="col-md-12 p-2">
                                                <div class="form-group">
                                                    <textarea name="isi" id="editor" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- konten upload gambar -->
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <span>upload gambar</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <label for="newbtn">
                                                        <span id="blah">Gambar Sampul</span>
                                                        <br>
                                                        <input name="gambar_sampul" type="file" class="form-control">
                                                    </label>
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <hr style="widht:100%">
                                                    <label for="newbtn">
                                                        <span id="blah">Gambar Kontent</span>
                                                        <br>
                                                        <input name="gambar_konten" type="file" class="form-control">
                                                    </label>
                                                    <button class="btn btn-dark mt-2" type="submit" name="btn_submit1">Posting</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Akhir kontent upload gambar -->
                                </div>
                            </div>
                        </form>
                        <!-- Akhir kontent -->
                    </div>
                </main>

                  <!-- footer -->
                <?php $this->load->view('admin/partial/footer') ?>

                <!-- Script CKEDITOR -->
                <script>
                ClassicEditor
                    .create( document.querySelector( '#editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );      
                </script>
                <!-- AKHIR SCRIPT CKEDITOR -->
                
            </div>
        </div>
        
      