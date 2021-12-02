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
                                <b style="margin-left:20px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">EDIT PODCAST</b>
                            </a>
                        </nav>

                        <?php foreach($podcast as $podcast) : ?>
                            <form action="<?php echo base_url(). 'admin/podcast/update'?>" method="post" enctype="multipart/form-data">
                                <div class="container mt-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <!-- input Judul -->
                                                <div class="col-md-12 p-2">	
                                                    <div class="form-group" style="margin-bottom: 1rem;">
                                                        <input type="hidden" name="id_podcast" value="<?php echo $podcast->id_podcast ?>" class="form-control" placeholder="Masukan Judul">
                                                        <input type="text" name="judul" value="<?php echo $podcast->judul ?>" class="form-control" placeholder="Masukan Judul">
                                                    </div>
                                                </div>
                                                <!-- akhir input judul -->
                                                <div class="col-md-12 p-2">
                                                    <!-- <div class="form-group">
                                                        <textarea name="isi" id="editor" value="" cols="30" rows="10"><?php echo $podcast->isi ?></textarea>
                                                    </div> -->
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
                                                        <label class=newbtn>
                                                            <img id="blah" src="<?php echo base_url().'assets/img_podcast/'. $podcast->gambar ?>" name="gambar" style="width: 100%;object-fit: contain;">
                                                            <input type="hidden" id="pic" name="gambar" value="<?php echo $podcast->gambar ?>"  class="pis" onchange="readURL(this);" type="file" >
                                                            <br>
                                                            <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih gambar sampul</span>
                                                        </label>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                        <hr style="widht:100%">
                                                        <!-- <label class="mb-1" style="text-transform:capitalize;" for="kategori">kategori</label> -->
                                                        <!-- <select name="kategori" id="" class="form-control">
                                                            <option value="">Pilih Kategori</option>
                                                            <?php foreach ($show as $kategori): ?>
                                                            <option value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->kategori ?></option>
                                                            <?php endforeach ?>
                                                        </select> -->
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
        
      