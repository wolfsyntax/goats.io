<header>

	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<a class="navbar-brand" href="#">W</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="ml-auto">
	    	<?php echo form_open('login', array('class'=>'form-inline my-2 my-lg-0', 'style'=>'',));?>
				<input class="form-control form-control-sm mr-sm-2" type="text" placeholder="Username" aria-label="Username">
				<input class="form-control form-control-sm mr-sm-2" type="password" placeholder="Password" aria-label="Password">
	      <button class="btn btn-sm btn-light my-2 my-sm-0 text-dark" type="submit" ><strong>Log In</strong></button>
				<p>&emsp;</p>
			<?php echo form_close(); ?>
		</div>
	
</nav>	

</header>