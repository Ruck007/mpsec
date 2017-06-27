<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Merchant Investment">
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/front/images/logo-micon.png" type="image/x-icon"/>
<link rel="icon" href="<?php echo base_url(); ?>assets/front/images/logo-micon.png" type="image/x-icon">
<title>M : I [ Merchant Investment ]</title>
<link href="<?php echo base_url(); ?>assets/front/css/custom.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/color.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/mega-menu.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap-theme.min.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/materialize.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/font-awesome.min.css" rel="stylesheet">
 
<link href="<?php echo base_url(); ?>assets/front/css/owl.slider.css" rel="stylesheet">
 
<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->
</head>
<body>
 
<div id="wrapper" class="wrapper">
 
<div id="cp-header" class="cp-header">
 
<div class="cp-topbar">
<div class="container">
<div class="row">
<div class="col-md-6">
<!--ul class="toplinks">
<li class="waves-effect waves-button"><a href="index-2.html">Home</a></li>
<li class="waves-effect waves-button"><a href="#">News</a></li>
<li class="waves-effect waves-button"><a href="#">FAQ’s</a></li>
<li class="waves-effect waves-button"><i class="fa fa-phone"></i> + 800 123 4567</li>
<li class="waves-effect waves-button"><i class="fa fa-envelope-o"></i> <a href="http://html.crunchpress.com/cdn-cgi/l/email-protection#bed7d0d8d1fed3dfcadbccd7dfd2d3dfd990ddd1d3"><span class="__cf_email__" data-cfemail="3851565e577855594c5d4a51595455595f165b5755">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></a></li>
</ul-->
</div>
<div class="col-md-6">
<ul class="toplinks pull-right">
<li class="waves-button">
	
<?php if(isset($isLogin)){ 
	echo "";
?>	&nbsp;&nbsp;
	<a href="<?php echo base_url(); ?>mpa/dashboard" target="_blank" id="btn_sys">ยินดีต้อนรับ คุณ <?php echo $this->session->userdata('username'); ?> เข้าสู่ระบบ MPSEC&nbsp;<i class="fa fa-money"></i></a>
	&nbsp;&nbsp;|&nbsp;&nbsp;
	<a href="<?php echo base_url(); ?>home/logout" id="btn_sys">Sign Out&nbsp;<i class="fa fa-sign-in"></i></a>
<?php }else{ ?>
	<a href="#myModal" data-target="#myModal" data-toggle="modal" id="MainNavHelp">Sign In&nbsp;<i class="fa fa-sign-in"></i></a>
<?php } ?>
</li>
</ul>
<div class="cp-topsocial pull-right">
</div>
</div>
</div>
</div>
</div>
<script>
$("#myModal").modal('show');
</script>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="text-align:center; background-color: #000;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h2 class="modal-title" style="color:#fff;">เข้าสู่ระบบตัวแทนขาย<br /> Merchant Partner Agent</h2>
        </div>
        <div class="modal-body">          
			<div class="cp-contact-form">
			<?php 
				$attributes = array('class' => 'material', 'id' => 'myform');
				echo form_open('/home/checkLogin', $attributes); 
			?>
			<ul>
			<li class="input-group"> <span class="input-group-addon">Username&nbsp;</span>
			<input type="text" name="username" class="form-control" placeholder="User Name" />
			</li>
			<li class="input-group"> <span class="input-group-addon">Password&nbsp;&nbsp;</span>
			<input type="password" name="password" class="form-control" placeholder="Password" />
			</li>
			<li class="input-group">
			<input type="text" class="form-control" style="visibility: hidden; " placeholder="UserName">
			<div class="row">
							<div class="col-sm-6 col-xs-12">
							<input type="checkbox" id="checkbox">&nbsp;Remember Me
							</div>
							<div class="col-sm-6 col-xs-12 text-right forgot-phone">
							<a href="<?php echo base_url(); ?>mpa/forgotpassword" class="f-w-600"> Forget Password?</a></div>
						</div>
			
			</li>
			<li>
								<?php echo validation_errors(); ?>
			<button type="submit" class="btn btn-submit waves-effect waves-button">Login <i class="fa fa-angle-right"></i></button>
			</li>
			</ul>
			</form>
			</div>
        </div>
        <div class="modal-footer" style="border-top:none;">
        </div>
      </div>
      
    </div>
  </div>

<div class="cp-logo-row">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/front/images/mi.png" alt="M I Logo"></a></div>
</div>
<!--div class="col-md-8">
<div class="cp-advertisement waves-effect"><img src="<?php echo base_url(); ?>assets/front/images/ad-large.gif" alt=""></div>
</div-->
</div>
</div>
</div>
 
 
<div class="cp-megamenu">
<div class="container">
<div class="row">
<div class="col-md-12" style="text-aligh:center;">
<div class="cp-mega-menu">
<label for="mobile-button"> <i class="fa fa-bars"></i> </label>
 
<input id="mobile-button" type="checkbox">
<ul class="collapse main-menu">
<li class="slogo"><a href="index-2.html"><img src="<?php echo base_url(); ?>assets/front/images/logo-micon.png" alt=""></a></li>
<li><a href="<?php echo base_url(); ?>">HOME</a>
</li>

<li> <a href="#">PRIVATE FUND</a>
<ul class="drop-down full-width blog-menu hover-expand">


<li>
<ul> 
<li class="validation">
<h2>รู้จัก PRIVATE FUND</h2>
</li>
<li> <a href="<?php echo base_url(); ?>content/fund_manager"> FUND MANAGER</a> </li>
<li> <a href="<?php echo base_url(); ?>content/fund_edge"> กรอบการลงทุน</a> </li>
<li> <a href="<?php echo base_url(); ?>content/fund_structure"> โครงสร้างกองทุน</a> </li>
<li> <a href="<?php echo base_url(); ?>content/fee"> ค่าธรรมเนียม</a> </li>
</ul>
</li>
<li>
<ul>
 
<li class="validation">
<h2>กลยุทธ์การลงทุนของเรา</h2>
</li>
<li> <a href="category-layout-3.html">MERCHANT POWER BETA</a> </li>
<li> <a href="category-layout-2.html">MERCHANT POWER ETF</a> </li>
<li> <a href="category-layout-1.html">MERCHANT POWER VALUE</a> </li>
</ul>
</li>
<li>
<ul>
 
<li class="validation">
<h2>ทำไมต้องเลือก PRIVATE FUND ของ MERCHANT PARTNERS</h2>
</li>
<li> <a href="category-layout-3.html">PRIVATE FUND ของ MERCHANT PARTNERS</a> </li>
</ul>
</li>
</ul>
</li>

<?php 
	if(isset($isLogin)){
		$link = base_url()."home/link/";
	}
	else{
		$link = base_url()."home/authen/";
	}
?>
<?php //if(isset($isLogin)){ ?>
<li> <a href="#">INVESTMENT STRATEGIES</a>
<ul class="drop-down full-width blog-menu hover-expand">


<li>
<ul> 
<li class="validation">
<h2 style="border-left: 5px solid #c6aa28;">POWER BETA</h2>
</li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT STRATEGY</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RECENT PERFORMANCE</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT PORTFOLIO</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> INVESTMENT OUTLOOK</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RELATED CONTENT</a> </li>
</ul>
</li>
<li>
<ul>
 
<li class="validation">
<h2>POWER ETF</h2>
</li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT STRATEGY</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RECENT PERFORMANCE</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT PORTFOLIO</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> INVESTMENT OUTLOOK</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RELATED CONTENT</a> </li>
</ul>
</li>
<li>
<ul>
 
<li class="validation">
<h2 style="border-left: 5px solid #cc28b0">POWER GROWTH</h2>
</li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT STRATEGY</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RECENT PERFORMANCE</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> CURRENT PORTFOLIO</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> INVESTMENT OUTLOOK</a> </li>
<li> <a href="<?php echo $link."1"; ?>"> RELATED CONTENT</a> </li>
</ul>
</li>
</ul>
</li>
<?php // } ?>

<li> <a href="#">MERCHANT PARTNER คือใคร?</a>
<ul class="drop-down one-column hover-expand">
 
<li>
<ul class="sub-menu">
<li> <a href="#">คณะผู้บริหาร</a> </li>
<li> <a href="#">ประวัติของบริษัทโดยย่อ</a> </li>
<li> <a href="author-archives.html">ข้อมูลสำคัญของบริษัท</a> </li>
<li> <a href="gallery-full.html">คณะกรรมการการลงทุน</a> </li>
<li> <a href="contact.html">ทีมผู้จัดการกองทุน</a> </li>
<li> <a href="page-404.html">MERCHANT POWER AGENT</a> </li>
</ul>
</li>
</ul>
</li>

<li><a href="<?php echo base_url(); ?>home/contactus">CONTACT US</a>
</li>
</li>
</ul>
</li>
<li class="random"><a href="random.html"><i class="icon-6"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
 
</div>