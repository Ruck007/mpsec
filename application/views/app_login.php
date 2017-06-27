<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ableproadmin.com/light/vertical/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 07:56:12 GMT -->
<head>
	<title>MPA Application: Login Page</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/back/images/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url(); ?>assets/back/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="<?php echo base_url(); ?>assets/back/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/icon/icofont/css/icofont.css">

	<!-- Required Fremwork -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/css/bootstrap.min.css">

	<!-- waves css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/plugins/waves/css/waves.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/css/color/color-1.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<?php echo form_open('/mpa/checkLogin'); ?>
						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/back/images/logo-blue.png">
						</div>
						<h3 class="text-center txt-primary">
							Sign In to your account
						</h3>
						<div class="md-input-wrapper">
							<input type="text" name="username" class="md-form-control" placeholder="User Name" />
							<label></label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" name="password" class="md-form-control" placeholder="Password" />
							<label></label>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
									<label class="input-checkbox checkbox-primary">
										<input type="checkbox" id="checkbox">
										<span class="checkbox"></span>
									</label>
									<div class="captions">Remember Me</div>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12 text-right forgot-phone">
								<a href="<?php echo base_url(); ?>mpa/forgotpassword" class="f-w-600"> Forget Password?</a>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center">LOGIN</button>
								
								<?php echo validation_errors(); ?>
							</div>
							<!--div class="col-xs-12 sign-in-with"><h6 class="text">Sign in With</h6></div>
							<div class="col-xs-12">
								<div class="social-login text-center">
									<button type="button" class="btn btn-facebook waves-effect waves-light">
										<span><i class="icofont icofont-social-facebook  txt-white f-18"></i></span><span>facebook</span>
									</button>

									<button type="button" class="btn btn-twitter waves-effect waves-light"><span><i class="icofont icofont-social-twitter  txt-white f-18"></i></span><span>twitter</span>
									</button>

									<button type="button" class="btn btn-google-plus waves-effect waves-light">
										<i class="icofont icofont-social-google-plus txt-white f-18"></i><span>google+</span>
									</button>
								</div>
							</div-->
						</div>
						<!-- <div class="card-footer"> -->
						<div class="row">
							<div class="col-sm-12 col-xs-12 text-center">
								<span class="text-muted">Don't have an account?</span>
								<a href="<?php echo base_url(); ?>mpa/signup" class="f-w-600 p-l-5">Sign up Now</a>
							</div>
						</div>
						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>
<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="<?php echo base_url(); ?>assets/back/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="<?php echo base_url(); ?>assets/back/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="<?php echo base_url(); ?>assets/back/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="<?php echo base_url(); ?>assets/back/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="<?php echo base_url(); ?>assets/back/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="<?php echo base_url(); ?>assets/back/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/back/js/jquery-ui.min.js"></script>
<!-- tether.js -->
<script src="<?php echo base_url(); ?>assets/back/js/tether.min.js"></script>
<!-- waves effects.js -->
<script src="<?php echo base_url(); ?>assets/back/plugins/waves/js/waves.min.js"></script>
<!-- Required Framework -->
<script src="<?php echo base_url(); ?>assets/back/js/bootstrap.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/back/pages/elements.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/back/js/common-pages.js"></script>
</body>

<!-- Mirrored from ableproadmin.com/light/vertical/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Mar 2017 07:56:12 GMT -->
</html>
