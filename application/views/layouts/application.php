<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title ><?= $title; ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome">

	<link rel="stylesheet" href="<?= base_url()?>public/css/app.css" data-turbolinks-track>

</head>
<body>
	<?php $this->load->view($body); ?>

	<!--Starter Template-->
	<script src="<?= base_url()?>public/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?= base_url()?>public/js/popper.min.js"></script>    
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		//$("[data-toggle=popover]").popover();
		$(function () {

			$('[data-toggle="tooltip"]').tooltip()


	  		$('#err_username').popover('show',{
				container: 'body'
			})

			$('#myModal').on('shown.bs.modal', function () {
			  $('#myInput').trigger('focus')
			})

			$('body').scrollspy({ target: '#navbar-example' })


			$('[data-spy="scroll"]').each(function () {
				var $spy = $(this).scrollspy('refresh')
			})

						
		})
	</script>
</body>
</html>