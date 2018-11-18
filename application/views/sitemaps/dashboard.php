<div class="container-fluid">
	<div class="row">
    <?php $this->load->view('includes/header'); ?>
    <?php $this->load->view('includes/sidebar'); ?>

    <main class="col-10 mt-1" role="main">
      <section class="col-12 bg-dark p-1">
        
        <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
          <strong>Pro Tip!</strong> If you want to update your profile details and password&emsp;<a class="btn btn-sm btn-success" href="<?= base_url()?>profile/settings"><span class="fa fa-pencil"></span>&nbsp;Edit Profile</a>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      </section>

      <section class="col-12 bg-dark">
        <?= ($this->session->flashdata('item')) ? $this->session->flashdata('item') : '&emsp;'; ?>&emsp;
      </section>

      <section class="p-5 col-12 text-dark">
        A
      </section>
    </main>
	</div>
</div>