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

	<div class="slider">
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info">
						<h2>Info / Berita<br><span>SMPK ST Theresia Kupang</span></h2>
						<a href="<?php echo base_url(); ?>pages/sejarahsekolah">Sejarah Sekolah SMPK ST Theresia</a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>

	<div class="content">
		<div class="container">

			<div class="container">
				<h1>News</h1>
				<section class="posts-con">
					<?php
						if (isset($newss)) {
							foreach ($newss as $news) {
								// $eventMonth = date('F', strtotime($news->eventDateTime));
								// $eventDay = date('d', strtotime($event->eventDateTime));
								// $eventTime = date("H:i", strtotime($event->eventDateTime));
								echo "
									<article>
										<div class='info'>
											<h3>$news->newsTitle</h3>
											<p class='info-line'><span class='time'>$news->newsDate</span><span class='place'>Pesan Dari : $news->newsAuthor</span></p>
											<p>$news->newsBody</p>
										</div>
									</article>
								";
							}
						}
					?>
				</section>
			</div>
		</div>
		<!-- / container -->
	</div>

	<?php include ('footer.php') ?>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>
</html>
