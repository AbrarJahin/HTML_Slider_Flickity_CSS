<!DOCTYPE html>
<html>
	<head>
		<title>flickity Slider</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.4/flickity.min.css" media="screen">
		<link rel="stylesheet" href="./css/style.css" media="screen">
	</head>
	<body>

		<!-- Flickity HTML init -->
		<div class="gallery js-flickity"
				data-flickity-options='{
											"wrapAround"	: true,
											"cellSelector"	: ".gallery-cell",
											"cellAlign"		: "center",
											"adaptiveHeight": true,
											"lazyLoad"		: true,
											"autoPlay"		: 3000,
											"pauseAutoPlayOnHover": true,
											"arrowShape"	: { 
																"x0": 10,
																"x1": 60, "y1": 50,
																"x2": 50, "y2": 20,
																"x3": 45
															}
										}'>	<!-- More options can be found - http://flickity.metafizzy.co/options.html -->
			<img class="gallery-cell" src="http://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/idcs1426.jpg">
			<img class="gallery-cell" src="http://www.nasa-usa.de/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/frontier_macsj0717.jpg">
			<img class="gallery-cell" src="https://support.files.wordpress.com/2009/07/pigeony.jpg?w=688">
			<img class="gallery-cell" src="http://wowslider.com/sliders/demo-23/data1/images/hohenschwangau532864.jpg" alt="Smiley face">
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.4/flickity.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.4/flickity.pkgd.min.js"></script>
	</body>
</html>