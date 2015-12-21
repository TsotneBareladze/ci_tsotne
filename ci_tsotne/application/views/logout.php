<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><?php echo doctype("html5");?>

<html>
<head>
	<meta charset="utf-8"/>
	<title>Bootstrap Project</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/style.css">
	<script src="<?php echo base_url(); ?>js/js.js"></script>

<!-- 	<?php
		$link = array(
			'href' => base_url().'style/style.css',
			'type'=>'text/css',
			'rel'=>'stylesheet'
			);
		echo link_tag($link);

	?> --><!--Es aris meore metodi css linkis chasmis -->


</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header" style="margin-left:100px;" >
      <a class="navbar-brand" href="<?php echo base_url();?>main/index">New Project</a>
    </div>
    <div>
      <ul class="nav navbar-nav" style="margin-left:100px;">
        <li class="active"><a href="<?php echo base_url();?>main/index">Home</a></li>
        <li><a href="<?php echo base_url();?>main/gallery">Gallery</a></li>
        <li><a href="<?php echo base_url();?>main/about">About</a></li> 
        <li><a href="<?php echo base_url();?>main/faq">FAQ</a></li> 
        <li><a href="<?php echo base_url();?>main/contactus">Contact Us</a></li>
      </ul><!--End navbar ul-->

      

<!-- Signupform-->

<a href="#">Logout</a>
 

	<!--Log In Form-->

	
    </div><!--End Sign Up AND Login-->
  </div><!--End container-fluid-->
</nav><!--End navbar-->