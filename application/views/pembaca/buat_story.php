<!-- HEAD -->
<?php $this->load->view('pembaca/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pembaca/partial/navbar') ?>

<body>
        <main>
            <div class="container-fluid px-4">
                <!-- kontent -->
                <center><h1>Tulis Story</h1></center>
                <form action="#" method="post" enctype="multipart/form-data">
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
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
                                            <textarea style="width: 100%;" name="isi" id="editor" cols="30" rows="10" placeholder="Tulis Story"></textarea>
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
</body>