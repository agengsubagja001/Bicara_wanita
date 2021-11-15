<!-- HEAD -->
<?php $this->load->view('pembaca/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pembaca/partial/navbar') ?>
<body>
        <div class="container" style="max-width: 1340px;">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-6 p-4">
                           <span style="font-size: 32px; font-family: 'PT Serif',serif; color: #000;">Faishol</span>
                        </div>
                        <div class="col-6 col-md-6 p-4">
                          <a href="<?php echo base_url('pembaca/buat_story') ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Buat Story <i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <span style="font-size: 25px; font-weight: bold; color: #000;">Story Mu</span> 
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row justify-content-center">
                       <div class="col-md-8 mt-5">
                        <div class="story" style="width:100%;height:auto;background: #FFFFFF; box-shadow: 0 5px 10px rgb(73 84 100 / 5%); border-radius: 30px;">
                                <!-- awal konten story -->
                                <a href="#" style="text-decoration: none; color:black;">
                                    <div class="col-md-12 text-center p-5">
                                        <div class= "row no-gutters">
                                            <div class="col-md-12 mt-2">
                                                <span style="font-family: Inter; font-style: normal;font-weight: 600; font-size: 20px; line-height: 29px;">Apakah Hidup Bisa Lebih Mudah</span>
                                                <div class="mb-2"><span style="overflow: hidden; text-overflow: ellipsis;  display: -webkit-box; -webkit-line-clamp: 2; line-clamp: 2; -webkit-box-orient: vertical;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum, nibh justo, nisl enim. Amet quam tellus orci fringilla mattis </span></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <hr>
                                        </div>
                                    </div>
                                </a>
                                <!-- akhir konten story -->
                        </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>  
</body>
