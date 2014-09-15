<?php include('../variables/variables.php'); ?>

<?php include('../template/top.php'); ?>

<?php include('../template/header.php'); ?>

<?php $active='gallery'; include('../template/nav.php'); ?>

<div class="row">
	<div class="col-md-12">
		<div class="item-container">
			<h1><?php echo $gallery_title; ?></h1>

			<div id="gallery-container">

				<?php
					for($i = 0; $i < count($gallery_images) / 4; $i++) {
						echo '<div class="row">';

						for($j = 0; $j < 4; $j++) {

							echo '<div class="col-md-3 col-xs-3">';

							$index = $i * 4 + $j;
							if($index < count($gallery_images)) {
								echo '<a class="thumbnail" href="javascript:void(0);">';
								echo '<img id="gallery-img-' . $index . '" data-gallery-id="' . $index . '" class="gallery-thumb" src="' . $gallery_images[$index] . '"></img>';
								echo '</a>';
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

<?php include('../template/bottom.php'); ?>