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
					<?= form_open('',array('class'=>'mt-5','style'=>'')); ?>
						<div class="row mt-md-5">
							<div class="col-12 col-md-6 ">
								<div class="form-group">
									<label class="col-form-label-sm mb-0">First Name: <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name = "first_name" id="" aria-describedby="" placeholder="First name" value="<?= set_value('first_name');?>" required>
									
									
									<?= (form_error('first_name')	!= "" ? form_error('first_name') : ''); ?>			
								

								</div>					
							</div>
							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="col-form-label-sm mb-0">Last Name: <span class="text-danger">*</span></label>							
									<input type="text" class="form-control" name = "last_name" id="" aria-describedby="" placeholder="Last name" value="<?=set_value('last_name');?>" autocomplete="off">

									
									<?= (form_error('last_name')	!= "" ? form_error('last_name') : ''); ?>							
									

								</div>					
							</div>

							<div class="col-12 col-md-12">
								<div class="form-group">
									<label class="col-form-label-sm mb-0">Username: <span class="text-danger">*</span></label>							
									<input type="text" class="form-control" name = "username" id="" aria-describedby="" placeholder="Username" value="<?= set_value('username');?>" autocomplete="off">

									
									<?= (form_error('username')	!= "" ? form_error('username') : ''); ?>			
								

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="col-form-label-sm mb-0">E-mail: <span class="text-danger">*</span></label>							
									<input type="email" class="form-control" name = "email" id="" aria-describedby="" placeholder="Email" value="<?= set_value('email');?>" autocomplete="off">

									<?= (form_error('email')	!= "" ? form_error('email') : ''); ?>							

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="col-form-label-sm mb-0">Mobile number: <span class="text-danger">*</span></label>							
									<input type="text" class="form-control" name = "phone" id="" aria-describedby="" placeholder="Mobile number" value="<?= set_value('phone');?>" autocomplete="off">
									

									<?= (form_error('phone')	!= "" ? form_error('phone') : ''); ?>							

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
									<label class="col-form-label-sm mb-0 pt-0">Password: <span class="text-danger">*</span></label>							
									<input type="password" class="form-control" name = "passwd" id="" aria-describedby="" placeholder="New Password" value="<?= set_value('passwd');?>">

									
									<?= (form_error('passwd')	!= "" ? form_error('passwd') : ''); ?>		
								

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group text-dark">
									<label class="col-form-label-sm mb-0 pt-0">Confirm Password: <span class="text-danger">*</span></label>							
									<input type="password" class="form-control" name = "conf_passwd" id="" aria-describedby="" placeholder="Re-Type New Password" value="<?= set_value('conf_passwd');?>">

								
									<?= (form_error('conf_passwd')	!= "" ? form_error('conf_passwd') : ''); ?>		
											

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

						
						<?= form_close(); ?>
					</div>
					
				</div>

			</div>
		</div>
	</section>

</main>
</div>