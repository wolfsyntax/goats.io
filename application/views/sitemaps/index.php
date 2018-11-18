<div class="bg-light" style="height: 100vh;">
<?php //$this->load->view('includes/header'); ?>
<main role="main text-dark">

	<section class="bg-dark">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link text-white" href="<?= base_url(); ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="<?= base_url(); ?>about">About</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="<?= base_url(); ?>about">Contact Us</a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link text-white" href="login">Log in</a></li>
					<li class="nav-item"><a class="nav-link text-white" href="register">Create Account</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="mt-2 bg-dark">
		<div class="container-fluid px-3 mx-auto bg-light">
			<div class="jumbotron bg-dark">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					</ol>
  					
  					<!-- 800x400 image-->

					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="#" alt="First slide">
							
							<div class="carousel-caption d-none d-md-block">
    							<h5>First Slide</h5>
    							<p>...</p>
							</div>

						</div>
						
						<div class="carousel-item">
							<img class="d-block w-100" src="#" alt="Second slide">
							
							<div class="carousel-caption d-none d-md-block">
    							<h5>Second Slide</h5>
    							<p>...</p>
							</div>
							
						</div>

						<div class="carousel-item">
							<img class="d-block w-100" src="#" alt="Third slide">
							
							<div class="carousel-caption d-none d-md-block">
    							<h5>Third Slide</h5>
    							<p>...</p>
							</div>
							
						</div>

						<div class="carousel-item">
							<img class="d-block w-100" src="#" alt="Fourth slide">
							
							<div class="carousel-caption d-none d-md-block">
    							<h5>Fourth Slide</h5>
    							<p>...</p>
							</div>
							
						</div>

						<div class="carousel-item">
							<img class="d-block w-100" src="#" alt="Fifth slide">
							
							<div class="carousel-caption d-none d-md-block">
    							<h5>Fifth Slide</h5>
    							<p>...</p>
							</div>
							
						</div>												
					</div>

					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>

					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</section>

</main>
</div>