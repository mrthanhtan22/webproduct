<html>
<head>
	<?php $this->load->view('site/head'); ?>
</head>
<body>
	<a href="#" id="back_to_top">
		<img src="<?php echo public_url()?>/site/images/top.png" />
	</a>
	<div class="wraper">
		<div class='header'>
			<?php $this->load->view('site/header'); ?>
		</div>
		<div id="container">
			<div class='left'>
				<?php $this->load->view('site/left'); ?>
			</div>
			<div class='content'>
				<?php $this->load->view($temp) ?>
			</div>
			<div class='right'>
				<?php $this->load->view('site/right'); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>

</body>
</html>