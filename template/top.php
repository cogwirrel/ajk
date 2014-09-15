<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="<?php echo $root; ?>img/jk_icon.png">
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $root; ?>css/ajk.css" rel="stylesheet">

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

<div class="modal fade" id="gallery-modal" tabindex="-1" role="dialog" aria-labelledby="gallery-modal-label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<a class="gallery-img" href="javascript:void(0);"></a>
			</div>
			<div class="modal-footer">
				<button type="button" id="gallery-button-prev" class="btn pull-left"><i class="fa fa-chevron-left"></i> Prev</button>
				<button type="button" id="gallery-button-next" class="btn">Next <i class="fa fa-chevron-right"></i></button>
			</div>
		</div>
	</div>
</div>

<div id="skrollr-body">
	<div id="content" class="container">

		<div class="space-60"></div>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">