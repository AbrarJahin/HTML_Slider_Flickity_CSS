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
											"initialIndex"	: 2,
											"contain"		: true,
											"lazyLoad"		: true,
											"autoPlay"		: 4000,
											"pauseAutoPlayOnHover": true,
											"adaptiveHeight": true,
											"arrowShape"	: { 
																"x0": 10,
																"x1": 60, "y1": 50,
																"x2": 50, "y2": 20,
																"x3": 45
															}
										}'>	<!-- More options can be found - http://flickity.metafizzy.co/options.html -->
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
			<div class="gallery-cell"></div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.4/flickity.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.0.4/flickity.pkgd.min.js"></script>
	</body>
</html>