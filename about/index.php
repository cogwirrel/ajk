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

					<div class="row">
						<div class="col-md-6">
							<h3>FFFC</h3>
							<div class="charity-logo-container">
								<a href="http://www.fffc.org.uk/"><img class="charity-logo-img" src="http://www.fffc.org.uk/graphics/fffc-logo.jpg"></img></a>
							</div>
							<div class="space-15"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus hendrerit iaculis. Duis sit amet massa sem. Pellentesque imperdiet risus nulla, nec commodo nulla porta vitae.</p>
						</div>

						<div class="col-md-6">
							<h3>BHF</h3>
							<div class="charity-logo-container">
								<a href="http://www.bhf.org.uk/"><img class="charity-logo-img" src="http://www.incaproductions.co.uk/wp-content/uploads/2012/04/bhf-gallery.png"></img></a>
							</div>
							<div class="space-15"></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent finibus hendrerit iaculis. Duis sit amet massa sem. Pellentesque imperdiet risus nulla, nec commodo nulla porta vitae.</p>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
	<div class="col-md-4">
		<?php generate_side_images($about_images); ?>
	</div>
</div>

<?php include('../template/bottom.php'); ?>