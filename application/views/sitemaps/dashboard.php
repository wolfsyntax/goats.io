<div class="container-fluid">
	<div class="row">
    <?php $this->load->view('includes/header'); ?>
		<nav class="col-md-2 d-none d-md-block bg-light sidebar">

      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active text-dark" href="#">
              <span class="fa fa-tachometer text-secondary"></span>
              &nbsp;Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-paw text-warning"></span>
              &nbsp;Manage Livestock
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-money text-danger"></span>
              &nbsp;Financials
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-stethoscope text-primary"></span>
              &nbsp;Vaccines and Health Check
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-sitemap text-info"></span>
              &nbsp;Breeding Info
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-archive"></span>
              &nbsp;Asset Management
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              <span class="fa fa-info-circle text-success"></span>
              &nbsp;Reports
            </a>
          </li>

        </ul>
      </div>
    </nav>



    <main class="col-10 mt-1" role="main">
      <section class="col-12 bg-dark">
        <?= ($this->session->flashdata('item')) ? $this->session->flashdata('item') : '&emsp;'; ?>&emsp;
      </section>
      <section class="p-5 col-12 text-dark">
        A
      </section>
    </main>
	</div>
</div>