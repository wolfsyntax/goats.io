
<div class="container-fluid bg-dark" style="height: 100vh !important;">
	<div class="row">
		<div class="col-12 col-md-4 bg-success d-none d-sm-none d-lg-block" style="height: 100vh !important;">&emsp;</div>
		<div class="col-12 col-md-4 bg-warning" style="height: 100vh !important;">
			<div class="container">
				<div class="clearfix mt-md-5">&emsp;</div>

				<div class="row mt-5">
					<div class="col-12 col-sm-12 col-lg-12">
						<?php echo form_open('',array('class'=>'mt-md-5','style'=>'')); ?>
							<div class="container">
								<div class="row">
									<div class="col-12">
										
										<div class="alert alert-success" role="alert" style="height: 50px;">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>
											<div class="row">
												<p>
													<span class="fa fa-exclamation-triangle">
													</span>
													<strong>Invalid</strong>&emsp;
												</p>
											</div>
										</div>

									</div>									
								</div>

								<div class="row px-md-auto">
									<div class="col-12">
										<div class="form-group">
								        	<input type="text" class="form-control" id="" name="username" placeholder="Username">

								        	<small class="form-text text-muted">
												<?php echo (form_error('username')	!= "" ? form_error('username') : ''); ?>																
											</small>

								        </div>
								    </div>

								    <div class="col-12">
										<div class="form-group">
								        
								        	<input type="text" class="form-control" id="" name="passwd" placeholder="Password">

								        	<small class="form-text text-muted">
												<?php echo (form_error('passwd')	!= "" ? form_error('passwd') : ''); ?>									
											</small>
							
								        </div>
								    </div>

								    <div class="col-12">
								    	<button type="submit" class="btn btn-sm btn-primary col-12">Log In</button>
								    </div>
								</div>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-4 bg-info d-none d-sm-none d-md-block" style="height: 100vh !important;">&emsp;</div>
	</div>
</div>