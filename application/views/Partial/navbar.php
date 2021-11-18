		
		<!-- Navbar Baru -->
		<nav class="navbar navbar-expand-lg navbar-dark" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%); background-color: #FFFFFF;color:#3333;margin-bottom:20px; position: fixed; z-index: 20; width: 100%">
			<table>
			<tr>
				<td><a class="navbar-brand" href="<?php echo base_url('halaman_utama'); ?>" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 25px; line-height: 20px;color:#F7476E">BICARA</a></td>
			</tr>
			<tr>
				<td><a class="navbar-brand" href="<?php echo base_url('halaman_utama'); ?>" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 25px; line-height: 20px;color:#F7476E">WANITA</a></td>
			</tr>
			</table>
			<button class="navbar-toggler" style="background-color:#F7476E;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 20px; color: #000000;" href="<?php echo base_url('detail_podcast') ?>">Podcast</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 20px; color: #000000;" href="<?php echo base_url('detail_story') ?>">Story</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 20px; color: #000000;" href="<?php echo base_url('detail_infografik') ?>">Infografik</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle"  style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 20px; color: #000000;" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						 Lainnya
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Ibu Dan Anak</a>
							<a class="dropdown-item" href="#">Kesehatan</a>
							<a class="dropdown-item" href="#">Lifestyle</a>
							<a class="dropdown-item" href="#">Fashion</a>
						</div>
					</li>
                    <li class="nav-item" style="margin-left: 510px;">			
					</li>
					<li class="nav-item">
                    <a href="<?php echo base_url('form_login/login'); ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Masuk</button></a>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		<!-- Navbar Baru Akhir -->


