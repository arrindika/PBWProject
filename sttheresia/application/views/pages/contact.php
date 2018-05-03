<!DOCTYPE html>
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
    <<?php include ('header.php'); ?>
    <div class="divider"></div>
        <h2>Request information</h2>
        <form action="#">
            <div class="left">
                <fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
                <fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
                <fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
            </div>
            <div class="right">
                <fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
            </div>
            <div class="btn-holder">
                <button class="btn blue" type="submit">Send request</button>
            </div>
        </form>
        <br>
    <?php include ('footer.php') ?>
</body>
