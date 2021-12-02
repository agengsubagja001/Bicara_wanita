<!-- HEAD -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-5 mb-4">

                        <!-- kontent -->
                        <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: #dfe5f1!important;}">
                            <a class="navbar-brand">
                                <b style="margin-left: 14px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">PRIVIEW STORY</b>
                            </a>
                        </nav>

                        <?php foreach($priview_story as $priview) : ?>
                            <form action="<?php echo base_url(). 'admin/story/update'?>" method="post" enctype="multipart/form-data">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <!-- input Judul -->
                                                <div class="col-md-12 p-2">	
                                                    <div class="form-group" style="margin-bottom: 1rem;">
                                                        <input type="hidden" name="id_akun" value="<?php echo $priview->id_akun ?>">
                                                        <input type="hidden" name="id_story" value="<?php echo $priview->id_story ?>">
                                                        <input type="text" style="font-weight:700; text-transform:capitalize;"  name="judul_story" value="<?php echo $priview->judul_story ?>" class="form-control" >
                                                    </div>
                                                </div>
                                                <!-- akhir input judul -->
                                                <div class="col-md-12 p-2">
                                                    <div class="form-group">
                                                        <input type="text" style="height:300px; text-transform:capitalize;"  name="isi_story"  value="<?php echo $priview->isi_story ?>" class="form-control" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- konten upload gambar -->
                                        <div class="card col-md-4">
                                            <div class="card-header">
                                                <span>VALIDASI</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <label for="newbtn">
                                                            <span id="blah">STATUS</span>
                                                            <br>
                                                            <span style="text-transform:capitalize;" class="badge bg-danger"><?php echo $priview->status ?></span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <label class=newbtn>
                                                            <img id="blah" src="<?php echo base_url().'assets/story/img_story/'. $priview->gambar ?>" style="width: 100%; object-fit: cover;">
                                                            <input id="pic" name="gambar" class="pis" onchange="readURL(this);" type="hidden" >
                                                            <br>
                                                            <span style="font-style: italic;color:#555;font-size:13px">Review foto sampul</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr style="widht:100%">
                                                        <!-- <label for="kategori">VALIDASI</label> -->
                                                        <select required name="status" id="" class="form-control">
                                                            <option value="">Pilih Validasi</option>
                                                            <option value="PUBLISH">PUBLISH</option>
                                                            <option value="TIDAK LOLOS PUBLISH">TIDAK LOLOS PUBLISH</option>
                                                        </select>
                                                        <button class="btn btn-dark mt-2" type="submit" name="btn_submit">Posting</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Akhir kontent upload gambar -->
                                    </div>
                                </div>
                            </form>
                        <?php endforeach ?>
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
        
      