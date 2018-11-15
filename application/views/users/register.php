<div class="container-fluid">
	<div class="row">

		<div class="col-12 col-md-6 d-none d-sm-block clearfix">
			&emsp;	
		</div>

		<div class="col-12 col-md-5 offset-md-1 mt-md-5 pr-md-5" >
			<form>
				<div class="row mt-md-5">
					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="text" class="form-control" name = "first_name" id="" aria-describedby="" placeholder="First name" value="<?php echo set_value('first_name');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>
					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="text" class="form-control" name = "last_name" id="" aria-describedby="" placeholder="Last name" value="<?php echo set_value('last_name');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					<div class="col-12 col-md-12">
						<div class="form-group">
					
							<input type="text" class="form-control" name = "username" id="" aria-describedby="" placeholder="Username" value="<?php echo set_value('username');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="email" class="form-control" name = "email" id="" aria-describedby="" placeholder="Email" value="<?php echo set_value('email');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="text" class="form-control" name = "phone" id="" aria-describedby="" placeholder="Mobile number" value="<?php echo set_value('phone');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					<div class="d-none d-sm-none d-md-block col-md-3">
						<div class="form-group">
							<label for="">Account Type</label>
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
								
							</small>
						</div>					
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="password" class="form-control" name = "passwd" id="" aria-describedby="" placeholder="New Password" value="<?php echo set_value('passwd');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					<div class="col-12 col-md-6">
						<div class="form-group">
					
							<input type="password" class="form-control" name = "conf_passwd" id="" aria-describedby="" placeholder="Re-Type New Password" value="<?php echo set_value('conf_passwd');?>">
							<small class="form-text text-muted">
								
							</small>
						</div>					
					</div>

					

				</div>

				<div class="row">
					<div class="col-12">
						<button type="submit" class="btn btn-success col-12">Sign Up</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>