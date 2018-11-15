<script>
	function show_password(){
	    var x = document.getElementById("loginPass");
	    if (x.type === "password") {
	        x.type = "text";
	    } else {
	        x.type = "password";
	    }
	}
</script>
<div class="container-fluid h-100">
	<div class="row">
		<div class="col-12 col-md-12 ">
			<div class="row mt-5">
				<div class="col-12">&emsp;</div>
			</div>
		</div>
		<div class="col-12 col-md-12 ">
			
			<div class="container d-flex h-100 mt-5">
				
				<div class="row m-auto">
					<div class="col-12 col-md-2">&emsp;</div>
					<div class="col-12 col-md-8">
						<form>
							<div class="row">
								<div class="col-12">
									<div class="input-group mb-2">
								        <div class="input-group-prepend">
								          <div class="input-group-text"><span class="fa fa-user"></span></div>
								        </div>
							        
							        	<input type="text" class="form-control" id="" name="username" placeholder="Username">
							        </div>
								</div>

								<div class="col-12">
									<div class="input-group mb-2">
							        
								        <div class="input-group-prepend">
								          <div class="input-group-text"><span class="fa fa-lock"></span></div>
								        </div>
							        
							        	<input type="password" id="password" name="password" class="form-control">
							        
								      

							      </div>
								</div>

								<div class="col-12">
									<div class="form-group">
										<input type="submit" class="btn btn-primary col-12" value="Log In" >
									</div>
								</div>
							</div>
						</form>						
					</div>
					<div class="col-12 col-md-2">&emsp;</div>
				</div>

				
				
			</div>

		</div>

	</div>
</div>