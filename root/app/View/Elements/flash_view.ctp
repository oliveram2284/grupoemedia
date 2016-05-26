<div class="row">
	<!-- top general alert -->
	<?php $div_class=(isset($class))?$class:'alert-danger';?>
	<div class="alert <?php echo $div_class?> top-general-alert">
			<?php echo $message;?>
		<button type="button" class="close">&times;</button>
	</div>
	<!-- end top general alert -->
</div>