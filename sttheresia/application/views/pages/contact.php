<!DOCTYPE html>
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
        <h2>Request information</h2>
        <div class="container">
			<form action="sendEmail" method="post">
			  <div class="form-group">
			    <label for="email">Email</label>
			    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input name="name" type="text" class="form-control" id="name" placeholder="Name">
			  </div>
			  <div class="form-group">
				  <label for="name">Subject</label>
				  <select name="subject" class="form-control">
				    <option value="Subject 1">Subject 1</option>
					<option value="Subject 1">Subject 1</option>
					<option value="Subject 1">Subject 1</option>
				  </select>
			  </div>
			  <div class="form-group">
			   <label for="message">Message</label>
			   <textarea name="message" class="form-control" id="message" rows="5"></textarea>
			 </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
        <br>
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
