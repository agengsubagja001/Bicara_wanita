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
                                            <?php echo $this->session->flashdata('pesan') ?>
                                            <form method="post" action="<?php echo base_url('form_login/login') ?>" class="user"  enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label >Username</label>
                                                    <input required style="width: 100%; height: 40px;" type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username" name="username">
                                                    <?php echo form_error('username', '<div class="text-danger small ml-2">','</div'); ?>
                                                </div>
                                                <div class="form-group">
                                                    <label >Password</label>
                                                    <input required style="width: 100%; height: 40px;" type="password" class="form-control form-control-user" id="pass" placeholder="Masukkan Password" name="password">
                                                    <?php echo form_error('password', '<div class="text-danger small ml-2">','</div'); ?>
                                                    <div class="show-password" style="display:flex; align-items:center; margin-top:5px; font-size:13px;"><input onclick="togglePasswordVisibility()" style="margin-right: 4px;" type="checkbox" ><span>Show Password</span></div>
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
                                                               <a href="<?php echo base_url('form_daftar'); ?>"> <button type="button" class="btn btn-outline-danger" style="border: 1px solid #F7476E;">Daftar</button></a>
                                                            </td>
                                                            <td>
                                                                <button type="submit" class="bt1 btn btn-primary" style="border: 1px solid #F7476E; background-color: #F7476E">Masuk</button>
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

        <!-- script untuk show password -->
        <script>
            const passwordInput = document.getElementById("pass");
            const togglePasswordVisibility = () => {
                if (passwordInput.type === "password"){
                    passwordInput.type = "text";
                }
                else{
                    passwordInput.type = "password";
                }
            };
        </script>
</body>