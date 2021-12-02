		
		<!-- Navbar Baru -->
		<nav class="nav1 navbar navbar-expand-lg navbar-dark mb-2" style="box-shadow: 0 5px 10px rgb(73 84 100 / 5%); background-color: #FFFFFF;color:#3333;margin-bottom:20px; position: fixed; z-index: 20; width: 100%">
			<table>
				<tr>
					<td ><a class="navbar-brand" href="<?php echo base_url('halaman_utama'); ?>" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 1.25em; line-height: 20px;color:#F7476E">BICARA</a></td>
				</tr>
				<tr>
					<td><a class="navbar-brand" href="<?php echo base_url('halaman_utama'); ?>" style="font-family: Prata; font-style: normal; font-weight: normal; font-size: 1.25em; line-height: 20px;color:#F7476E">WANITA</a></td>
				</tr>
			</table>
			<button class="navbar-toggler" style="background-color:#F7476E;" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto" style="margin:auto;">
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
						<div class="drop mb-3 dropdown-menu"  aria-labelledby="navbarDropdown">
							<?php foreach($show_kategori as $kategori): ?>
								<a class="dropdown-item" value="<?php echo $kategori->id_kategori ?>" href="<?php echo base_url().'halaman_utama/detail_kategori?id='.$kategori->id_kategori ?>"><?php echo $kategori->kategori ?></a>
							<?php endforeach ?>
						</div>
					</li>
				</ul>
				<!-- untuk button masuk -->
				<table>
					<tr>
						<td><a class="navbar-brand" href="<?php echo base_url('form_login/login'); ?>"><button type="button" class="btn btn-outline-danger" style=" border: 1px solid #F7476E; border-radius: 10px">Masuk</button></a></td>
					</tr>
				</table>
			</div>

			
		</nav>
		<!-- Navbar Baru Akhir -->

		<!-- navbar bawah -->
		<div class="d-flex justify-content-center">
			<nav class="nav ">
				<a href="<?php echo base_url('halaman_utama'); ?>" class="nav__link">
				<i class="material-icons nav__icon">home</i>
				<span class="nav__text">Home</span>
				</a>
				<a href="<?php echo base_url('detail_podcast') ?>" class="nav__link">
				<span class="material-icons">graphic_eq</span>
				<span class="nav__text">Podcast</span>
				</a>
				<a href="<?php echo base_url('detail_story') ?>" class="nav__link nav__link--active">
				<i class="material-icons nav__icon"><span class="material-icons">post_add</span></i>
				<span class="nav__text">Story</span>
				</a>
				<a href="<?php echo base_url('detail_infografik') ?>" class="nav__link">
				<i class="material-icons nav__icon">image</i>
				<span class="nav__text">Infografik</span>
				</a>
				<a href="<?php echo base_url('form_login/login'); ?>" class="nav__link">
				<i class="material-icons nav__icon">person</i>
				<span class="nav__text">akun</span>
				</a>
			</nav>
		</div>
		<!-- akhir navbar bawah -->


