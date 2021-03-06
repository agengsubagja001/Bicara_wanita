<!-- HEAD -->
<?php $this->load->view('penulis/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('penulis/partial/navbar') ?>

        <div id="layoutSidenav">
          
            <!-- sidebar -->
            <?php $this->load->view('penulis/partial/sidebar') ?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-4 mb-4">
                        <!-- kontent -->
                        <nav class="navbar navbar-light bg-light justify-content-between" style="background-color: #dfe5f1!important;}">
                            <a class="navbar-brand">
                                <b style="margin-left:20px; left: 439px; top: 128px; font-family: Poppins; font-style: normal; font-weight: 500; font-size: 20px; line-height: 37px; display: flex; align-items: center; color: #666;">ADD BLOG</b>
                            </a>
                        </nav>
                        <form action="<?php echo base_url(). 'penulis/tambah_blog/upload'?>" method="post" enctype="multipart/form-data">
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <!-- input Judul -->
                                            <div class="col-md-12 p-2">	
                                                <div class="form-group" style="margin-bottom: 1rem;">
                                                    <input type="hidden" name="id_akun" value="<?php echo $this->session->userdata('id_akun')  ?>">
                                                    <input type="text" name="judul" class="form-control" placeholder="Masukan Judul">
                                                </div>
                                            </div>
                                            <!-- akhir input judul -->
                                            <div class="col-md-12 p-2">
                                                <div class="form-group">
                                                    <textarea placeholder="Masukan isi" name="isi" id="editor" cols="30" rows="10"></textarea>
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
                                                    <label class=newbtn>
                                                        <img id="blah" src="<?php echo base_url('assets/img_temp/sampul_blog.png') ?>" style="width: 100%;object-fit: contain;">
                                                        <input id="pic" name="gambar" class="pis" onchange="readURL(this);" type="file" >
                                                        <br>
                                                        <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih gambar sampul ukuran (945 X 630)</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12">
                                                    <hr style="widht:100%">
                                                    <label for="kategori">kategori</label>
                                                    <select name="kategori" id="" class="form-control">
                                                        <option>Pilih Kategori</option>
                                                        <?php foreach ($show_kategori as $kategori): ?>
                                                        <option value="<?php echo $kategori->id_kategori ?>"><?php echo $kategori->kategori ?></option>
                                                        <?php endforeach ?>
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
                        <!-- Akhir kontent -->
                    </div>
                </main>

                  <!-- footer -->
                <?php $this->load->view('penulis/partial/footer') ?>

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
                
            </div>
        </div>
        
      