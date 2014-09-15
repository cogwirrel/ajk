<?php
	include('content.php');

	$root = '/ajk/';
	
	function generate_side_images($images) {
		for($i = 0; $i < count($images); $i++) {
			echo '<div class="row">
					<div class="col-md-12 side-col">
						<div class="item-container">
							<img class="side-img" src="' . $images[$i] . '"></img>
						</div>
					</div>
				</div>
				<div class="space-15"></div>';
		}
	}
?>