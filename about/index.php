<?php include('../variables/variables.php'); ?>

<?php include('../template/top.php'); ?>

<?php include('../template/header.php'); ?>

<?php $active='about'; include('../template/nav.php'); ?>

<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<div class="item-container">
					<div class="text-container">
						<h1>About Us</h1>
						<p align="justify"><?php echo $about_text; ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="space-60"></div>

		<div class="row">
			<div class="col-md-12">
				<div class="item-container">
					<h1>Who We Work With</h1>

					<?php
						for($i = 0; $i < count($about_work_with) / 2; $i++) {
							echo '<div class="row">';

							for($j = 0; $j < 2; $j++) {

								echo '<div class="col-md-6">';

								$index = $i * 2 + $j;
								if($index < count($about_work_with)) {
									echo '<h3>'.$about_work_with[$index][0].'</h3>';
									echo '<div class="charity-logo-container">
											<a href="' . $about_work_with[$index][1] . '"><img class="charity-logo-img" src="' . $about_work_with[$index][2] . '"></img></a>
										</div>
										<div class="space-15"></div>
										<p>' . $about_work_with[$index][3] . '</p>';
								}

								echo '</div>';
							}

							echo '</div>';
							echo '<div class="space-15"></div>';
						}
					?>

				</div>
			</div>
		</div>

	</div>
	<div class="col-md-4">
		<?php generate_side_images($about_images); ?>
	</div>
</div>

<?php include('../template/bottom.php'); ?>