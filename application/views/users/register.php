<div class="bg-light" style="height: 100vh;">
<?php //$this->load->view('includes/header'); ?>
<main role="main">
	
	<section>
		<div class="container-fluid">
			<div class="row">

				<div class="col-12 col-md-6 d-none d-sm-block clearfix">
					&emsp;
				</div>

				<div class="col-12 col-md-5 offset-md-1 mt-md-5 pr-md-5" >
					<?php echo form_open('',array('class'=>'mt-md-5','style'=>'')); ?>
						<div class="row mt-md-5">
							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "first_name" id="" aria-describedby="" placeholder="First name" value="<?php echo set_value('first_name');?>">
									
									<small class="form-text text-muted">
										<?php echo (form_error('first_name')	!= "" ? form_error('first_name') : ''); ?>			
									</small>

								</div>					
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "last_name" id="" aria-describedby="" placeholder="Last name" value="<?php echo set_value('last_name');?>">

									<small class="form-text text-muted">
										<?php echo (form_error('last_name')	!= "" ? form_error('last_name') : ''); ?>							
									</small>

								</div>					
							</div>

							<div class="col-12 col-md-12">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "username" id="" aria-describedby="" placeholder="Username" value="<?php echo set_value('username');?>">

									<small class="form-text text-muted">
										<?php echo (form_error('username')	!= "" ? form_error('username') : ''); ?>			
									</small>

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="email" class="form-control" name = "email" id="" aria-describedby="" placeholder="Email" value="<?php echo set_value('email');?>">

									<small class="form-text text-muted">
										<?php echo (form_error('email')	!= "" ? form_error('email') : ''); ?>							
									</small>
								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "phone" id="" aria-describedby="" placeholder="Mobile number" value="<?php echo set_value('phone');?>">
									
									<small class="form-text text-muted">
										<?php echo (form_error('phone')	!= "" ? form_error('phone') : ''); ?>							
									</small>

								</div>					
							</div>

							<div class="d-none d-sm-none d-md-block col-md-3">
								<div class="form-group">
									<label for="" class="text-dark">Account Type</label>
								</div>					
							</div>
							
							<div class="col-12 col-md-9">
								<div class="form-group">
							
									<select name="account_type" class="custom-select ">
										<option value="">-- Choose Account Type --</option>
										<option value="admin">Farm Owner</option>
										<option value="employee">Tenant</option>
										<option value="superuser">Tech Support</option>
									</select>
									
									<small class="form-text text-muted">
									<?php echo (form_error('account_type')	!= "" ? form_error('account_type') : ''); ?>				
									</small>
								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="password" class="form-control" name = "passwd" id="" aria-describedby="" placeholder="New Password" value="<?php echo set_value('passwd');?>">

									<small class="form-text text-muted">
										<?php echo (form_error('passwd')	!= "" ? form_error('passwd') : ''); ?>		
									</small>

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group text-dark">
							
									<input type="password" class="form-control" name = "conf_passwd" id="" aria-describedby="" placeholder="Re-Type New Password" value="<?php echo set_value('conf_passwd');?>">

									<small class="form-text text-muted">
										<?php echo (form_error('conf_passwd')	!= "" ? form_error('conf_passwd') : ''); ?>		
									</small>		

								</div>					
							</div>

							

						</div>

						<div class="row">
							<div class="col-12">
								<button type="submit" class="btn btn-success col-12">Sign Up</button>
							</div>
						</div>

						<div class="row">
							<div class="col-12 col-sm-12 col-lg-12">
								<div class="container-fluid">
									<div class="clearfix">&emsp;</div>
									<div class="row">
									
										<div class="col-12 col-sm-12 col-lg-12">
											<p class="form-inline text-dark">Already have an account? <a href="login" class="nav-link font-weight-normal text-capitalize text-dark" title="Login" tabindex="0">Log In</a></p>
										</div>
									</div>							

								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
					
				</div>

			</div>
		</div>
	</section>

</main>
</div>