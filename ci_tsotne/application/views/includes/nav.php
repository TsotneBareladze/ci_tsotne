
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
<?php if(! $this->session->has_userdata('uniqid')):
    $this->load->view('includes/signup.php');
    $this->load->view('includes/login.php'); 
  else:?>

<button type="button" class="btn btn-danger" 
  style="float: right; margin-right: 2%; margin-top: 7px;">
<a style="color: white;" href="<?php echo base_url('main/logout/');?>">Log Out</a></button>

<?php endif; ?>

    </div><!--End Sign Up AND Login-->
  </div><!--End container-fluid-->
</nav><!--End navbar-->