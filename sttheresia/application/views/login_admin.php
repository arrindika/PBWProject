<html>
<head>
	<title>Admin Login Page</title>
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>assets/css/style.css"> -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
</head>

<body>
	<div class="container">
		<form class="form-horizontal" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Admin Login Page</div>
						<!-- <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div> -->
					</div>

					<div style="padding-top:30px" class="panel-body" >
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

						<form id="loginform" class="form-horizontal" role="form">
							<?php if(! is_null($msg)) echo $msg;?>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
							</div>
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="login-password" type="password" class="form-control" name="password" placeholder="password">
							</div>
							<!-- <div class="input-group">
								<div class="checkbox">
									<label>
										<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
									</label>
								</div>
							</div> -->
							<div style="margin-top:10px" class="form-group">
								<!-- Button -->
								<div class="col-sm-12 controls">
									<button type="submit"  id="btn-login" class="btn btn-success" value="Login">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
