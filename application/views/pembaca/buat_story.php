<!-- HEAD -->
<?php $this->load->view('pembaca/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pembaca/partial/navbar') ?>
<br>
<br>
<br>
<body>
        <main>
            <div class="container-fluid px-4">
                <!-- kontent -->
                <center><h1>Tulis Story</h1></center>
                <form action="<?php echo base_url('pembaca/buat_story/upload1') ?>" method="post" enctype="multipart/form-data">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <!-- input gambar -->
                                    <div class="col-md-12 p-2 text-center">	
                                        <label class=newbtn>
                                            <img id="blah" src="<?php echo base_url('assets/img/img.png') ?>" style="width: 200px;object-fit: cover;">
                                            <input id="pic" name="gambar" class="pis" onchange="readURL(this);" type="file" >
                                            <br>
                                            <span style="font-style: italic;color:#555;font-size:13px">Klik untuk memilih gambar sampul / optional</span>
                                        </label>
                                    </div>
                                    <!-- input Judul -->
                                    <div class="col-md-12 p-2">	
                                        <div class="form-group" style="margin-bottom: 1rem;">
                                            <input type="hidden" name="id_akun" value="<?php echo $this->session->userdata('id_akun') ?>">
                                            <input required type="text" name="judul" class="form-control" placeholder="Masukan Judul">
                                        </div>
                                    </div>
                                    <!-- akhir input judul -->
                                    <div class="col-md-12 p-2">
                                        <div class="form-group">
                                            <textarea required style="width: 100%;" name="isi" id="editor" cols="30" rows="10" placeholder="Tulis Story"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- konten upload gambar -->
                                <div class="col-md-12 text-right">     
                                    <button class="btn btn-dark mt-2" style="background: #F7476E; border: 1px solid #F7476E;" type="submit" name="btn_submit">Posting</button>
                                </div>
                            <!-- Akhir kontent upload gambar -->
                        </div>
                    </div>
                </form>
                <!-- Akhir kontent -->
            </div>
        </main>

        <!-- Script CKEDITOR -->
        <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );      
        </script>
        <!-- AKHIR SCRIPT CKEDITOR -->

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
</body>