<div class="bg-light" style="height: 100vh;">
<?php $this->load->view('includes/header'); ?>
<main role="main">
	
	<section>
		<div class="container-fluid">
			<div class="row">

				<div class="col-12 col-md-6 d-none d-sm-block clearfix">
					&emsp;
				</div>

				<div class="col-12 col-md-5 offset-md-1 mt-md-5 pr-md-5" >
					<?php echo form_open(base_url().'profile/details',array('class'=>'mt-5','style'=>'')); ?>
						<div class="row mt-md-5">
							
							<div class="col-12 col-md-6">
								<div class="form-group">
								
									<input type="text" class="form-control" name = "first_name" id="" aria-describedby="" placeholder="First name" value="<?php echo (set_value('first_name') ? set_value('first_name') : $this->session->userdata('user_fname')); ?>">
									
									<small class="form-text text-muted">
										<?php echo (form_error('first_name')	!= "" ? form_error('first_name') : ''); ?>			
									</small>

								</div>					
							</div>

							<div class="col-12 col-md-6">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "last_name" id="" aria-describedby="" placeholder="Last name" value="<?php echo (set_value('last_name') ? set_value('last_name') : $this->session->userdata('user_lname')); ?>">

									<small class="form-text text-muted">
										<?php echo (form_error('last_name')	!= "" ? form_error('last_name') : ''); ?>							
									</small>

								</div>					
							</div>

							<div class="col-12 col-md-12">
								<div class="form-group">
							
									<input type="text" class="form-control" name = "phone" id="" aria-describedby="" placeholder="Mobile number" value="<?php echo (set_value('phone') ? set_value('phone') : $this->session->userdata('user_phone')); ?>">
									
									<small class="form-text text-muted">
										<?php echo (form_error('phone')	!= "" ? form_error('phone') : ''); ?>							
									</small>

								</div>					
							</div>
						</div>
						
						<div class="row mb-4">
							<div class="col-12">
								<button type="submit" class="btn btn-primary col-12">Save Details</button>
							</div>
						</div>
					<?php echo form_close(); ?>

					<?php echo form_open(base_url().'profile/security',array('class'=>'mt-1','style'=>'')); ?>
						<div class="row">
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
								<button type="submit" class="btn btn-success col-12">Change Password</button>
							</div>
						</div>

						<?php echo form_close(); ?>

						<div class="row mt-3">
							<div class="col-12 text-dark">
								<div class="alert alert-info">
									If you want to change your Email address and Username, see <a href="#">FAQ</a>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			</div>
		</div>
	</section>

</main>
</div>