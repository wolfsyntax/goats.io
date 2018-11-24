<div class="bg-light" style="height: 100vh;">
<?php //$this->load->view('includes/header'); ?>
<main role="main text-dark">

	<section class="bg-dark">
		<div class="container-fluid">
			<?php $this->load->view('includes/generic_header');?>
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


	<section>
		<div class="row">
			<div class="col-2 bg-danger collapse show" id="demo">
				A
			</div>
			<div class="col-10 bg-primary" id="myDIV">
				 <button data-toggle="collapse" data-target="#demo" onclick="xv(); return false;">A</button>
			</div>
		</div>

	</section>


	<script type="text/javascript">
		function xv(){
			var element = document.getElementById("myDIV");
   			element.classList.toggle("col-12");
   			document.getElementById("demo");
   			element.classList.toggle("d-non d-sm-none");
		}
	</script>
</main>
</div>