<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<title ><?= $title; ?>&nbsp;&mdash;&nbsp;Goats Organize Application Tracking System</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome">

	<link rel="stylesheet" href="<?= base_url()?>public/css/app.css" >


</head>
<body>
	
	<main role="main">
		<?php $this->load->view($body); ?>
	</main>

	<!--Starter Template-->
	<script src="<?= base_url()?>public/js/jquery-3.3.1.slim.min.js"></script>

    <script src="<?= base_url()?>public/js/popper.min.js"></script>    
    <script src="<?= base_url()?>public/js/bootstrap.min.js"></script>

   	<script src="<?= base_url(); ?>assets/js/jquery-editable-select.min.js"></script>
    
	<script type="text/javascript">

	$(function () {
  		
  		$('[data-toggled="popover"]').popover();

  		$('#dam_id_select').editableSelect();

  		$('#sire_id_select').editableSelect();

		$('#body_color_select').editableSelect();

		$('#goat_id_select').editableSelect();		
		
  		$("#sidebar > li div.collapse a.nav-link").each(function(){
  			var self = $(this);
  			var href = self.attr("href");

  			self.attr("href","javascript:void(0);");

  			self.click(function(){
  				//alert(href);
  				$("#ui_view").prop('src',href)
//  				$("#body-content ui_view").load();
  			});
  		});
	});

	</script>
</body>
</html>
