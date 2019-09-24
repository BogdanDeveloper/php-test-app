<div class="row">
	<?php 
		foreach (SERVICES_DATA as $element) { ?>
			<div class="col-4">
				<h4><?php echo $element['title'] ?></h4>
				<p><?php echo $element['body'] ?></p>
			</div>
		<?php };
	?>
</div>
