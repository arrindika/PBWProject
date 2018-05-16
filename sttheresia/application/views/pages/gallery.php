<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SMPK ST THERESIA KUPANG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<?php include ('header.php'); ?>

	<div class="divider"></div>

	<div class="content">
		<div class="container">
			<h1 class="single">Our Galeries</h1>

			<div class="main-content">
				<div class="slider-con">
					<ul class="container">
						<li>
							<div class="slide container">
								<ul>
									<!-- <?php
										if (isset($pictures)) {
											foreach ($pictures as $picture) {
												echo "
													<li>
														<b>$picture->namaFoto</b><br>
														<img src='<?php echo base_url(); ?>assets/images/galeri/lapangan.jpeg' alt='$picture->namaFoto'>
													</li>
												";
											}
										}
									?>-->

									<li><b>Galeri Piala 1</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/prestasi1.jpeg" alt="Galeri Piala Prestasi #1"></a></li>
									<li><b>Galeri Piala 2</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/prestasi2.jpeg" alt="Galeri Piala Prestasi #2"></a></li>
									<li><b>Lapangan Olahraga & Upacara</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/lapangan.jpeg" alt="Lapangan Olahraga & Upacara"></a></li>
									<li><b>Lab Komputer</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/labkomputer.jpeg" alt="Lab Komputer"></a></li>
									<li><b>Ruang Guru</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/ruangguru.jpeg" alt="Ruang Guru"></a></li>
									<li><b>Ruang Kelas</b><br><a href="#"><img src="<?php echo base_url(); ?>assets/images/galeri/ruangkelas.jpeg" alt="Ruang Kelas"></a></li>

								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>

		</div>
		<!-- / container -->
	</div>

	<?php include ('footer.php') ?>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src=<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
