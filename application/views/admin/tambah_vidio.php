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

                        <!-- kontent -->
                        <nav class="mt-3 navbar navbar-light bg-light justify-content-between" style="background-color: #dfe5f1!important;">
                            <a class="navbar-brand">
                                <b class="" style="margin-left: 20px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">ADD VIDIO</b>
                            </a>
                        </nav>
                        <form action="<?php echo base_url(). 'admin/vidio/upload'?>" method="post" enctype="multipart/form-data">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <!-- input Judul -->
                                            <div class="col-md-12 p-2">	
                                                <div class="form-group" style="margin-bottom: 1rem;">
                                                    <input type="hidden" name="id_blog" value="">
                                                    <input required type="text" name="judul" class="form-control" placeholder="Masukan Judul">
                                                </div>
                                            </div>
                                            <!-- akhir input judul -->
                                            <div class="col-md-12 p-2">
                                                <div class="form-group">
                                                    <input required name="vidio" placeholder="masukan link vidio (atur ukuran widht jadi 100%)" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- konten upload gambar -->
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <span>upload</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <label class=newbtn>
                                                        <img id="blah" src="<?php echo base_url('assets/img/img.png') ?>" style="width: 100%;object-fit: contain;">
                                                        <input required id="pic" name="gambar_tubnail" class="pis" onchange="readURL(this);" type="file" >
                                                        <br>
                                                        <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih gambar thumbnail</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr style="widht:100%">
                                                    <button class="btn btn-dark mt-2" type="submit" name="btn_submit">Posting</button>
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
        
      