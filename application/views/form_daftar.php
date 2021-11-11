<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<br>
<br>
<body>
    <!-- awal section daftar -->
    <section>
        <div class="container" style="max-widht: 1340px;">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <center><h1>Daftar</h1></center>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-9 mt-5">
                    <div class="daftar" style=" width: 100%;  background: #FFFFFF; height: auto; box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.07);border-radius: 20px;">
                        <div class="p-4">
                            <br>
                            <div class="container">
                                <div class="col-md-12">
                                    <!-- form daftar -->
                                     <form action="post" action="" class="user">
                                        <div class="form-group">
                                            <label >Username</label>
                                            <input required style="width: 100%; height: 40px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label >Email</label>
                                            <input required style="width: 100%; height: 40px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Email" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label >Kata Sandi</label>
                                            <input required style="width: 100%; height: 40px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Kata sandi" name="username">
                                        </div>
                                        <br>
                                        <!-- awal button -->
                                        <div class="col-md-12 text-center">
                                          <a href="#" style="text-decoration: none;"><button type="button" class="bt1 btn btn-primary" style="border: 1px solid #F7476E; background-color: #F7476E">Daftar</button></a>
                                        </div>
                                        <!-- akhir button -->
                                     </form>
                                    <!-- akhir form daftar -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir section daftar -->
</body>