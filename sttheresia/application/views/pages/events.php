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
						<h2>Kegiatan Akan Datang<br><span>SMPK ST Theresia Kupang</span></h2>
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
				<h1>Upcoming events</h1>
				<section class="posts-con">
					<?php
						if (isset($events)) {
							foreach ($events as $event) {
								$eventMonth = date('F', strtotime($event->eventDate));
								$eventDay = date('d', strtotime($event->eventDate));
								$eventTime = date("H:i", strtotime($event->eventTime));
								echo "
									<article>
										<div class='current-date'>
											<p>$eventMonth</p>
											<p class='date'>$eventDay</p>
										</div>
										<div class='info'>
											<h3>$event->eventTitle</h3>
											<p class='info-line'><span class='time'>$eventTime</span><span class='place'>$event->eventLocation</span></p>
											<p>$event->eventBody</p>
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
