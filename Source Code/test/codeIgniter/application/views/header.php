<html>
<head>
<title>News Portal </title>
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<script src="<?php echo base_url(); ?>js/jquery.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/validation.js"></script>

<style>
     	img.std_img {
	    width: 215px;
	    padding: 5px;
	    background: #fff;
	    border: 1px solid #cecece;
	    height:255px;
	}
 </style>

</head>
<body>
<?php 
if(session_status() == PHP_SESSION_NONE){
	session_start();
}?>

<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url() ?>">BBC News Publishing Portal</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse pull-right" id="navbarCollapse">
			<ul class="nav navbar-nav">
				<?php if(!isset($_SESSION['user_name']))
				{?>
				<li><a href="<?php echo base_url() ?>register" target="_blank">Register</a></li>
				<li><a href="<?php echo base_url() ?>register/SingIn" target="_blank">Login</a></li>
				<?php } else {?>

					<li><a href="<?php echo base_url() ?>register/login">User Posts</a></li>
					<li><a href="<?php echo base_url() ?>register/logout">Logout</a></li>
					<?php }?>
			</ul>
		</div>
	</div>
</nav>

	