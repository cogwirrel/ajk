<?php include('variables/variables.php'); ?>

<?php include('template/top.php'); ?>

<div id="home" class="row">
	<div class="col-md-12">
		<div class="item-container">
			<div id="quote-container"><a id="quote-corner" href="#contact">Free Quote!</a></div>
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

<?php $active='home'; include('template/nav.php'); ?>

<div id="services">
	<div class="row">
		<div class="col-md-12">
			
			<div class="item-container">
				<div class="row">
					<div class="col-md-12">
						<h1>Who we are...</h1>
					</div>
				</div>

				<div class="space-30"></div>

				<div class="row">
					<div class="col-md-4 service-item">
						<span class="fa fa-cogs"></span>
						<h3>Tailored</h3>
						<p><?php echo $home_tailored_description; ?></p>
					</div>
					<div class="col-md-4 service-item">
						<span class="fa fa-gbp"></span>
						<h3>Competitive</h3>
						<p><?php echo $home_competitive_description; ?></p>
					</div>
					<div class="col-md-4 service-item">
						<span class="fa fa-graduation-cap"></span>
						<h3>Professional</h3>
						<p><?php echo $home_professional_description; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>

<div id="what-where" class="row">
	<div class="col-md-12">

		<div class="row">
			
			<div class="col-md-12">
				<div class="item-container">
					<h1>Where we go...</h1>
					<div class="space-15"></div>
					<div class="row">
						<div class="col-md-12">
							<p class="where-we-go"><?php echo $home_where_we_go; ?></p>
							<div class="space-15"></div>
							<p class="and-more"><em>And more...</em></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>

<div class="space-60"></div>

<div id="testimony" class="row">
	<div class="col-md-12">
		<div class="item-container">
			<h1>Testimonials</h1>
			<div class="space-15"></div>
			
			<div id="carousel-testimony" class="carousel slide" data-ride="carousel" data-interval="10000">

				<div class="carousel-inner">

					<?php 
						for($i = 0; $i < count($home_testimonials); $i++) {
							$item_class = $i === 0 ? 'item active' : 'item';
							echo '<div class="'.$item_class.'"><div class="testimony-item"><p><em>"';
							echo $home_testimonials[$i][0] . '"</em> ';
							echo $home_testimonials[$i][1] . '</p></div></div>';
						}
					?>
					
				</div>

				<a class="left carousel-control" href="#carousel-testimony" role="button" data-slide="prev">
					<span class="fa fa-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-testimony" role="button" data-slide="next">
					<span class="fa fa-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="space-60"></div>

<div id="contact" class="row">
	<div class="col-md-12">
		<div class="item-container contact contact-no-highlight">
			<h1>Contact</h1>
			<h2 class="sub-header"><?php echo $home_contact_text; ?></h2>

			<div class="space-15"></div>

			<div class="row contact-method">
				<div class="col-md-6">
					<a href="mailto:<?php echo $email; ?>"><span class="fa fa-envelope-o"></span></a>
					<p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
				</div>

				<div class="col-md-6">
					<span class="fa fa-phone"></span>
					<p><?php echo $phone; ?></p>
				</div>
			</div>

		</div>
	</div>
</div>

<?php include('template/bottom.php'); ?>