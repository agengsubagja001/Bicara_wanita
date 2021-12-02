<!-- HEAD -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('admin/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4">
                       

                        <!-- kontent -->
                        <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: #dfe5f1!important;}">
                            <a class="navbar-brand">
                                <b style="margin-left:20px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">EDIT INFOGRAFIK</b>
                            </a>
                        </nav>

                        <?php foreach($infografik as $info) : ?>
                            <form action="<?php echo base_url(). 'admin/infografik/update'?>" method="post" enctype="multipart/form-data">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <!-- input Judul -->
                                                <div class="col-md-12 p-2">	
                                                    <div class="form-group" style="margin-bottom: 1rem;">
                                                        <label for="judul" style="text-transform:capitalize; ">judul</label>
                                                        <input type="hidden"  name="id_infografik" value="<?php echo $info->id_infografik ?>" class="form-control" placeholder="Masukan Judul">

                                                        <input type="text" style="text-transform:capitalize;" name="judul" value="<?php echo $info->judul ?>" class="form-control" placeholder="Masukan Judul">
                                                    </div>
                                                </div>
                                                <!-- akhir input judul -->
                                                <div class="col-md-12 p-2">
                                                    <div class="form-group">
                                                    <label for="isi" style="text-transform:capitalize;">isi</label>
                                                        <textarea style="text-transform:capitalize; " name="isi" id="editor" value="" cols="30" rows="10"><?php echo $info->isi ?></textarea>
                                                    </div>
                                                </div>
                                               <div class="col-md-12 p-2">
                                                <button style="width:auto;" class="btn btn-dark mt-2" type="submit" name="btn_submit">Posting</button>
                                               </div>
                                            </div>
                                        </div>
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
        
      