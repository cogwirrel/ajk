<?php include('../variables/variables.php'); ?>

<?php include('../template/top.php'); ?>

<?php include('../template/header.php'); ?>

<?php $active='courier'; include('../template/nav.php'); ?>

<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="item-container">
					<div class="text-container">
						<h1>Courier</h1>
						<p align="justify"><?php echo $courier_text; ?></p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-md-4">
		<?php generate_side_images($courier_images); ?>
	</div>
</div>

<?php include('../template/bottom.php'); ?>