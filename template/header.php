<div id="home" class="row">
	<div class="col-md-12">
		<div class="item-container">
			<h1 class="header"><?php echo strtoupper($name); ?></h1>
			<h2 class="sub-header"><?php echo $tagline; ?></h2>
			<h2 id="location-sub-header" class="sub-header"><?php echo $where; ?></h2>
			<div class="row">
				<div class="col-md-6">
					<p class="contact-header"><a href="mailto:<?php echo $email; ?>"><i class="fa fa-envelope-o"></i><br><?php echo $email; ?></a></p>
				</div>
				<div class="col-md-6">
					<p class="contact-header"><i class="fa fa-phone"></i><br><?php echo $phone; ?></p>
				</div>
			</div>
		</div>
	</div>
</div>