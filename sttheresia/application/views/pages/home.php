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
						<h2>It’s Time to <br><span>Get back to school</span></h2>
						<a href="<?php echo base_url(); ?>pages/sejarahsekolah">Sejarah Sekolah SMPK ST Theresia</a>
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>

	<section class="posts">
		<div class="container">
			<article>
				<div class="pic"><img width="121" src="<?php echo base_url(); ?>assets/images/2.png" alt=""></div>
				<div class="info">
					<h3>Visi</h3>
					<p>Terwujudnya insan yang unggul, mandiri, terampil, berakhlak mulia dan berbudi pekerti luhur </p>
				</div>
			</article>
			<article>
				<div class="pic"><img width="121" src="<?php echo base_url(); ?>assets/images/3.png" alt=""></div>
				<div class="info">
					<h3>Misi</h3>
					<ol type="1">
						<li>Melaksanakan proses pembelajaran secara profesional untuk meningkatkan kemampuan iptek peserta didik</li></br>
						<li>Memberikan bimbingan secara intensif untuk meningkatkan potensi peserta didik</li></br>
						<li>Menumbuh kembangkan penghayatan dan pengalaman nilai-nilai agama yang dianut untuk membentuk pribadi yang berbudi pekerti luhur dan berakhlak mulia</li></br>
					</ol>
				</div>
			</article>
		</div>
		<!-- / container -->
	</section>

	<section class="posts">
		<div class="container">
			<article>
				<div class="pic"><img width="121" src="<?php echo base_url(); ?>assets/images/2.png" alt=""></div>
				<div class="info">
					<h3>Program Sekolah</h3>
					<p>Terwujudnya insan yang unggul, mandiri, terampil, berakhlak mulia dan berbudi pekerti luhur </p>
				</div>
			</article>
			<article>
				<div class="pic"><img width="121" src="<?php echo base_url(); ?>assets/images/2.png" alt=""></div>
				<div class="info">
					<h3>Ekstrakulikuler</h3>
					<p>*Paskibraka</p>
					<p>*Osis</p>
					<p>*Pramuka</p>
					<p>*Klub Futsal</p>
				</div>
			</article>
		</div>
		<!-- / container -->
	</section>


	<section class="news">
		<div class="container">
			<h2>Latest news</h2>
				<div class="info">
					<?php
						if (isset($latestNews)) {
							foreach ($latestNews as $news) {
								// int strlen ( string $news->newsBody )
								// if ($strlen) {
								// 	// code...
								// }
								$str = $news->newsBody;
								if(strlen($str)>=200){
									$newsMiniBody = substr ($news->newsBody, 0, 200);
									$newsMiniBody = $newsMiniBody."(...)";
								}
								else {
									$newsMiniBody = $news->newsBody;
								}
								echo "
									<article>
										<h4>
											<b>$news->newsTitle</b>
											<p class='date'>$news->newsDate, Pesan Dari : $news->newsAuthor</p>
										</h4>
										<div class='info'>
											<p>$newsMiniBody</p>
											<a class='more' href='news'>Read more</a>
										</div>
									</article>
								";
							}
						}
					?>
					<div class="btn-holder">
						<a class="btn" href="<?php echo base_url(); ?>pages/news">See archival news</a>
					</div>
				</div>
		</div>
		<!-- / container -->
	</section>

	<section class="events">
		<div class="container">
			<h2>Upcoming events</h2>
			<?php
				if (isset($upcomingEvent)) {
					foreach ($upcomingEvent as $event) {
						$str = $event->eventBody;
						if(strlen($str)>=200){
							$eventMiniBody = substr ($event->eventBody, 0, 200);
							$eventMiniBody = $eventMiniBody."...";
						}
						else {
							$eventMiniBody = $event->eventBody;
						}
						$eventMonth = date('F', strtotime($event->eventDateTime));
						$eventDay = date('d', strtotime($event->eventDateTime));
						$eventTime = date("H:i", strtotime($event->eventDateTime));
						echo "
							<article>
								<div class='current-date'>
									<p>$eventMonth</p>
									<p class='date'>$eventDay</p>
								</div>
								<div class='info'>
									<p>$eventMiniBody</p>
									<a class='more' href='events'>Read more</a>
								</div>
							</article>
						";
					}
				}
			?>
			<div class="btn-holder">
				<a class="btn blue" href="<?php echo base_url(); ?>pages/events">See all upcoming events</a>
			</div>
		</div>
		<!-- / container -->
	</section>
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
	<script>window.jQuery || document.write("<script src='<?php echo base_url();?>js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="<?php echo base_url(); ?>js/plugins.js"></script>
	<script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>
