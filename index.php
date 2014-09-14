<?php include('variables/variables.php'); ?>

<?php include('template/top.php'); ?>

<div id="home" class="row">
	<div class="col-md-12">
		<div class="item-container">
			<div id="quote-container"><a id="quote-corner" href="#contact">Free Quote!</a></div>
			<h1 class="header"><?php echo $name_caps; ?></h1>
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

<div class="space-15"></div>
<div class="space-30"></div>

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
						<p>We're here to help you. Whatever you need us to do, wherever you need us to go.</p>
					</div>
					<div class="col-md-4 service-item">
						<span class="fa fa-gbp"></span>
						<h3>Competitive</h3>
						<p>We offer a free quote and our services are priced competitively.</p>
					</div>
					<div class="col-md-4 service-item">
						<span class="fa fa-graduation-cap"></span>
						<h3>Professional</h3>
						<p>Not just a man in a van! We arrive uniformed and ready to look after your goods.</p>
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
							<p class="where-we-go">Trowbridge - Westbury - Warminster - Frome - Radstock - Bradford on Avon - Bath - Chippenham - Calne - Devizes - Melksham - Bratton - Peasedown St John - Salisbury - Shepton Mallet</p>
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
					<div class="item active">
						<div class="testimony-item">
							<p><em>"They arrived when we had arranged, ready to do the job. They secured our goods firmly in the back of the van and they arrived undamaged. We will be using J K Transit again."</em> Geoff, Devizes<p>
						</div>
					</div>
					<div class="item">
						<div class="testimony-item">
							<p><em>"They managed to fit me in last minute, couldn't be more helpful."</em> Barbara, Bradford on Avon<p>
						</div>
					</div>
					<div class="item">
						<div class="testimony-item">
							<p><em>"We'd arranged to transport a lot of items in a single van load. However one or two items didn't quite fit. The drivers were very busy but they arranged to come back in the evening to complete the job at no extra charge."</em> John, Trowbridge<p>
						</div>
					</div>
					<div class="item">
						<div class="testimony-item">
							<p><em>"I like the fact they went the extra mile to wrap all of my goods in blankets before securing them in the van."</em> Lee, Bedminster<p>
						</div>
					</div>
					<div class="item">
						<div class="testimony-item">
							<p><em>"I was very impressed at the level of service I received, based on how competitive the price was."</em> Tracy, Weston-super-Mare<p>
						</div>
					</div>
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
			<h2 class="sub-header">Call or Email us for a FREE QUOTE</h2>

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

<div class="space-60"></div>

<?php include('template/bottom.php'); ?>