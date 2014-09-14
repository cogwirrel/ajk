<?php include('variables/variables.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="img/jk_icon.png">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/ajk.css" rel="stylesheet">

	<title><?php echo $name; ?></title>

	<meta property="og:title" content="<?php echo $name; ?>" />
	<meta property="og:image" content="http://jktransit.co.uk/img/jk_icon.png" />
	<meta property="og:description" content="<?php echo $tagline; ?>" />
	<meta property="og:url" content="http://jktransit.co.uk" />
	<meta property="og:type" content="website" />
	
	<meta name="description" content="<?php echo $tagline; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="author" content="Jack Stevenson">
</head>

<body>

<div id="skrollr-body">
	<div id="content" class="container">

		<div class="space-60"></div>

		<div id="home" class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
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
			<div class="col-md-2"></div>
		</div>