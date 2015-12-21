

	<div>
			<div class="modal fade" id="loginform">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="">
					<span>&times;</span></button>
					<h4 class="modal-title">Log In</h4>
					
				</div>
				<div class="modal-body">z
					<form class="form-horizontal" action="<?php echo base_url().'main/signin/'?>"  method= "post">
					<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Email:</label>
								<div class="col-md-5">
									<input type="text" class="form-control input-sm" value="" name="email">
								</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 colmd-offset-1">Password:</label>
								<div class="col-md-5">
									<input type="password" class="form-control input-sm" name="password">
								</div>
						</div>
						<?php if( $this->session->has_userdata('error')) echo $this->session->userdata('error');  ?>




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
		
	</div>
