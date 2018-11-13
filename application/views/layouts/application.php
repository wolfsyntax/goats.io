<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title ><?= $title; ?></title>

	<link rel="stylesheet" href="<?= base_url()?>public/css/app.css" >

</head>
<body>
	<?php $this->load->view($body); ?>

	<!--Starter Template-->
	<script src="<?= base_url()?>public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url()?>public/js/popper.min.js"></script>    
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

</body>
</html>