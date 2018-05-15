<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>SMPK ST THERESIA KUPANG</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<?php include ('header.php'); ?>

	<div class="divider"></div>

	<div class="content">
		<div class="container">
			<h1 class="single">Guru Pengajar SMPK St. Theresia Kupang</h1>

			<div class="container">
				<table class="table">
					<thead class="thead">
						<tr>
							<td><b>Nama</b></td>
							<td><b>NIP</b></td>
							<td><b>Tanggal Lahir</b></td>
							<td><b>Pendidikan Jurusan</b></td>
						</tr>
					</thead>
					<tbody class="tbody">
						<?php
							if (isset($teachersdata)) {
								foreach ($teachersdata as $teacherdata) {
									$tanggallahir = date('Y-m-d', strtotime($teacherdata->tanggal_lahir));
									echo "
									<tr>
										<td>$teacherdata->nama</td>
										<td>$teacherdata->jenis_kelamin</td>
										<td>$tanggallahir</td>
										<td>$teacherdata->pendidikan_jurusan</td>
									</tr>
									";
								}
							}
						?>
					</tbody>
				</table>
				<!-- <div class="slider-con">
					<ul class="bxslider">
						<li>
							<div class="slide">
								<ul>

								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>

								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>

								</ul>
							</div>
						</li>
					</ul>
				</div> -->
			</div>
		<!--
			<aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li><a href="#">Day of teacher<span class="nr">142</span></a></li>
						<li><a href="#">Student olympics<span class="nr">98</span></a></li>
						<li class="current"><a href="#">The best students in 2014<span class="nr">16</span></a></li>
						<li><a href="#">Halloween party<span class="nr">63</span></a></li>
						<li><a href="#">School party<span class="nr">49</span></a></li>
						<li><a href="#">Miss of university<span class="nr">175</span></a></li>
						<li><a href="#">Karaoke party<span class="nr">87</span></a></li>
					</ul>
				</div>
			</aside>
		-->
			<!-- / sidebar -->

		</div>
		<!-- / container -->
	</div>
	<div class="container">
		<a href="<?php echo base_url(); ?>pages/contact" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
	</div>

	<?php include ('footer.php') ?>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
