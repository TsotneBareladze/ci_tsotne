	  <ul class="nav navbar-nav navbar-right">
	        <li data-toggle="modal" data-target="#signupform"><a href="#"><span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#signupform"></span> Sign Up</a></li>
	        <li data-toggle="modal" data-target="#loginform" ><a href="#"><span class="glyphicon glyphicon-log-in"  data-toggle="modal" data-target="#loginform"></span> Login</a></li>
      </ul>



	<!--Popup Signupform-->
	<div class="modal fade" id="signupform">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="">
					<span>&times;</span></button>
					<h4 class="modal-title">SignUp</h4>
					
				</div>
					<?php echo validation_errors(); ?>
				
				<div class="modal-body">
				<form class="form-horizontal" 
					action="<?php echo base_url().'main/regform/'?>" 
					method= "POST">
			
						<div class="form-group" id="">
							<label class="col-md-4 colmd-offset-1">First Name:</label>
								<div class="col-md-5">
									<input type="text" class="form-control input-sm" 
									name="firstname"
									value="<?php echo set_value('firstname');?>">
								</div>
							
						</div>


						<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Last Name:</label>
								<div class="col-md-5">
									<input type="text" class="form-control input-sm" 
									name="lastname"
									value="<?php echo set_value('lastname');?>">
								</div>
						</div>



						<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Email:</label>
								<div class="col-md-5">
									<input type="email" class="form-control input-sm"
									name="email"
									value="<?php echo set_value('email');?>">
								</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Password:</label>
								<div class="col-md-5">
									<input type="password" class="form-control input-sm"
									name="password"
									value="">
								</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Confirm Password:</label>
								<div class="col-md-5">
									<input type="password" class="form-control input-sm"
									name="conf_password"
									value="">
								</div>
						</div>

						<div class="form-group">						
								
								<div class="col-md-2 col-md-offset-8">
									<input type="submit" class="btn btn-success" value="submit">
								</div><input type="hidden" name="hide" value="<?php echo uniqid().rand(100,10000); ?>">
						</div>


					</form>
					
					
				</div>
				<div class="modal-footer"></div>
			</div>
			
		</div>
		
	</div>