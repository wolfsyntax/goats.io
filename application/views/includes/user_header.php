<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light col-12">
  <a class="navbar-brand text-center" href="#">&emsp;G.O.A.T.S</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="navbar-toggler-icon"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li-->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url() ?>dashboard" title="Dashboard"><i class="fa fa-user-circle"></i><span class="d-block-inline d-sm-block-inline d-md-block-inline d-lg-none ">&emsp;<?= $this->session->userdata('user_fname'); ?></span></a>
      </li>

      <li class="nav-item" style="position: relative; float: left;">
        <a class="nav-link" href="<?= base_url() ?>dashboard" title="Dashboard">
          <?php if($this->session->userdata('notif') == 1){ ?>
            <i class="fa fa-bell-o badge">
          <?php } else { ?>
            <i class="fa fa-bell">
          <?php } ?>
            </i><span class="badge badge-danger">1</span><span class="d-block-inline d-sm-block-inline d-md-block-inline d-lg-none ">&emsp;Notifications</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-cog text-dark"></i><span class="d-block-inline d-sm-block-inline d-md-block-inline d-lg-none ">&emsp;Settings</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <p class="dropdown-item" href="">Signed in as<br/><strong class="text-dark"><?= $this->session->userdata('username'); ?></strong></p>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url() ?>profile/settings"><i class="fa fa-question-circle"></i>&emsp;Help</a>
          <a class="dropdown-item" href="<?= base_url() ?>profile/settings"><i class="fa fa-user"></i>&emsp;Your Profile</a>
          
          <a class="dropdown-item" href="<?= base_url() ?>logout"><i class="fa fa-sign-out"></i>&emsp;Sign out</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>