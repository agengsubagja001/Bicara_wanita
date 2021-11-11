<!-- head -->
<?php $this->load->view('partial/head'); ?>
<!-- navbar -->
<?php $this->load->view('partial/navbar'); ?>
<br>
<br>
<br>
<br>
<body>
        <!-- awal form login -->
            <section>
                <div class="container" style="max-width: 1340px;">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <center><h1>Login</h1></center>
                        </div>
                        <div class="col-xl-5 col-lg-12 col-md-9 mt-5">
                            <div class="login" style=" width: 100%;  background: #FFFFFF; height: auto; box-shadow: 0px 15px 15px rgba(0, 0, 0, 0.07);border-radius: 20px;">
                                <div class="p-4">
                                    <div class="container">
                                        <br>
                                        <div class="col-md-12">
                                            <!-- form login -->
                                            <form method="post" action="" class="user">
                                                <div class="form-group">
                                                    <label >Username</label>
                                                    <input required style="width: 100%; height: 40px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <label >Password</label>
                                                    <input required style="width: 100%; height: 40px;" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password" name="password">
                                                </div>
                                                <a href="#"  style="text-decoration: none; color:black"><label style="font-weight: bold;">Lupa Kata Sandi?</label></a>
                                                <br>
                                                <br>
                                                <br>
                                                <!-- awal button -->
                                                <div class="col-md-12">
                                                    <table style="margin-left: auto; margin-right: auto;">
                                                        <tr>
                                                            <td style="position:relative; right:5px;">
                                                               <a href="#"> <button type="button" class="btn btn-outline-danger" style="border: 1px solid #F7476E;">Daftar</button></a>
                                                            </td>
                                                            <td>
                                                              <a href="#" style="text-decoration: none;"><button type="button" class="bt1 btn btn-primary" style="border: 1px solid #F7476E; background-color: #F7476E">Masuk</button></a>
                                                            </td>
                                                        </tr>
                                                    </table> 
                                                </div>
                                                <!-- akhir button -->
                                            </form>   
                                            <!-- akhir form login -->
                                            <br>    
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- akhir form login -->
</body>