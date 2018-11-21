<div class="container-fluid">
	<main role="main">
		<section>
			<div class="row">
				<div class="col-12">
					<h3>Alert</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="alert alert-primary" role="alert">
  						A simple primary alert—check it out!
					</div>

					<div class="alert alert-primary" role="alert">
						A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
					</div>

					<div class="alert alert-success" role="alert">
						<h4 class="alert-heading">Well done!</h4>
						<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
						<hr>
						<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
					</div>

					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>Holy guacamole!</strong> You should check in on some of those fields below.
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>	

				</div>
			</div>
		</section>
		<section>
			<div class="row">
				<div class="col-12">
					<h3>Badge</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h1>Example heading <span class="badge badge-secondary">New</span></h1>

					<button type="button" class="btn btn-primary">
						Notifications <span class="badge badge-light">4</span>
					</button>

					<span class="badge badge-primary">Primary</span>

					<span class="badge badge-pill badge-primary">Primary</span>

					<a href="#" class="badge badge-primary">Primary</a>

				</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>Breadcrumb</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					
					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item active" aria-current="page">Home</li>
					  </ol>
					</nav>

					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Library</li>
					  </ol>
					</nav>

					<nav aria-label="breadcrumb">
					  <ol class="breadcrumb">
					    <li class="breadcrumb-item"><a href="#">Home</a></li>
					    <li class="breadcrumb-item"><a href="#">Library</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Data</li>
					  </ol>
					</nav>

					<h3>Changing the separator</h3>
					<p>Separators are automatically added in CSS through ::before and content. They can be changed by changing $breadcrumb-divider. The quote function is needed to generate the quotes around a string, so if you want > as seperator, you can use this:</p>

					<code>$breadcrumb-divider: quote(">");</code>		
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>Buttons</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<button type="button" class="btn btn-primary">Primary</button>

					<a class="btn btn-primary" href="#" role="button">Link</a>

					<button type="button" class="btn btn-outline-primary">Primary</button>

					<button type="button" class="btn btn-primary btn-lg">Large button</button>

					<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>

					<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Primary link</a>

					<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>

					<a href="#" class="btn btn-primary btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Primary link</a>

					<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
						Single toggle
					</button>

					<div class="btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-secondary active">
					    <input type="checkbox" checked autocomplete="off"> Checked
					  </label>
					</div>

					<div class="btn-group btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-secondary active">
					    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
					  </label>
					  <label class="btn btn-secondary">
					    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
					  </label>
					  <label class="btn btn-secondary">
					    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
					  </label>
					</div>					
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>Card</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					
					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>

					<div class="card">
					  <div class="card-body">
					    This is some text within a card body.
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="card-link">Card link</a>
					    <a href="#" class="card-link">Another link</a>
					  </div>
					</div>

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
					  <div class="card-body">
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
					</div>					

					<div class="card" style="width: 18rem;">
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">Cras justo odio</li>
					    <li class="list-group-item">Dapibus ac facilisis in</li>
					    <li class="list-group-item">Vestibulum at eros</li>
					  </ul>
					</div>

					<div class="card" style="width: 18rem;">
					  <div class="card-header">
					    Featured
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">Cras justo odio</li>
					    <li class="list-group-item">Dapibus ac facilisis in</li>
					    <li class="list-group-item">Vestibulum at eros</li>
					  </ul>
					</div>					

					<div class="card" style="width: 18rem;">
					  <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Card title</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">Cras justo odio</li>
					    <li class="list-group-item">Dapibus ac facilisis in</li>
					    <li class="list-group-item">Vestibulum at eros</li>
					  </ul>
					  <div class="card-body">
					    <a href="#" class="card-link">Card link</a>
					    <a href="#" class="card-link">Another link</a>
					  </div>
					</div>

					<div class="card">
					  <div class="card-header">
					    Featured
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Special title treatment</h5>
					    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>		

					<div class="card">
					  <h5 class="card-header">Featured</h5>
					  <div class="card-body">
					    <h5 class="card-title">Special title treatment</h5>
					    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>	

					<div class="card">
					  <div class="card-header">
					    Quote
					  </div>
					  <div class="card-body">
					    <blockquote class="blockquote mb-0">
					      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
					    </blockquote>
					  </div>
					</div>

					<div class="card text-center">
					  <div class="card-header">
					    Featured
					  </div>
					  <div class="card-body">
					    <h5 class="card-title">Special title treatment</h5>
					    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					  <div class="card-footer text-muted">
					    2 days ago
					  </div>
					</div>																		
				</div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

		<section>
			<div class="row">
				<div class="col-12">
					<h3>...</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12"></div>
			</div>
		</section>

	</main>
</div>