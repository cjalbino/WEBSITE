<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="css/camera.css">

	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src='js/camera.js'></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery.stellar.js"></script>
	<script src="js/script.js"></script>
	<script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script>
	<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/wow.js"></script>
	<script>
		$(document).ready(function () {
			if ($('html').hasClass('desktop')) {
				new WOW().init();
			}
		});
	</script>
	<script>(function(d, s, id){
		var js,fjs-

	})
		
	</script>
	<!--<![endif]-->
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
	 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
		 <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
	 </a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie-8.css">
	<![endif]-->
	</head>
<body class="index">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">
						<a href="https://www.facebook.com/"><span class="bd-ra fa fa-facebook"></span></a>
						<a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
					</div>
					<h1><a href="index.html">Zamboanga Peninsula<span> </span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li class="current"><a href="index.html">Home</a></li>
							<li><a href=" ">Provinces</a>
									<ul>
										<li><a href="{{ url('zamboanga_delnorte') }}">Zamboanga del Norte</a></li>
										<li><a href="{{ route('zamdelsur') }}">Zamboanga del Sur</a>
									
										</li>
										<li><a href="{{ route('zamsibugay') }}">Zamboanga Sibugay</a></li>
									</ul>
								</li>
							<li><a href="{{ route('zamsibugay') }}">Destination</a></li>
							<li><a href="{{ route('blog') }}">Forum</a></li>
							<li><a href="{{ route('portfolio') }}">About Us</a></li>
							<li><a href="{{ route('contacts') }}">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</header>

<!--=======content================================-->

<section id="content">
	<div class="full-width-container block-1">
		<div class="camera_container">
			<div id="camera_wrap">
				<div class="item" data-src="images/zheader4.jpg">
					<div class="camera_caption fadeIn">
						<h3>Unwind</h3>
					</div>
				</div>
				<div class="item" data-src="images/zheader4.jpg">
					<div class="camera_caption fadeIn">
						<h3>Relax</h3>
					</div>
				</div>
				<div class="item" data-src="images/zheader4.jpg">
					<div class="camera_caption fadeIn">
						<h3>Best Design</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="full-width-container block-2">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Region IX is known for...</span></h2>
					</header>
					<div class="isotope clearfix">
						<a href="images/ts1.jpg" class="item-1 w-1"><div class="img_block"><img src="images/ts1c.jpg" alt="img"></div><i>+</i></a>
						<a href="images/ts2.jpg" class="item-2 w-2"><div class="img_block"><img src="images/ts2c.jpg" alt="img"></div><i>+</i></a>
						<a href="images/ts3.jpg" class="item-3 w-1"><div class="img_block"><img src="images/ts3c.jpg" alt="img"></div><i>+</i></a>
						<!--<a href="images/ts4.jpg" class="item-4 w-1"><div class="img_block"><img src="images/ts4c.jpg" alt="img"></div><i>+</i></a>
						<a href="images/ts5.jpg" class="item-5 w-2"><div class="img_block"><img src="images/ts5c.jpg" alt="img"></div><i>+</i></a>-->
					</div>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width-container block-3">
		<div class="container">
			<div class="row">
				<div class="item-1 clearfix">
					<header>
						<center><h2><span>Region IX</span></h2></center>
					</header>
					<!--<div class="grid_2">
						<div class="img_block"><img src="images/index_img-8.jpg" alt=""></div>
					</div>-->
					<div class="grid_12">

						<div class="text">It is an administrative region in the Philippines, designated as Region IX. The region consists of three provinces (Zamboanga del Norte, Zamboanga Sibugay and Zamboanga del Sur) and two independent cities (Isabela City and Zamboanga City). The city of Pagadian is designated as the regional center. It is also known as Peninsula de Zamboanga in Zamboangueño.</div>
					</div>
				</div>
				<br>
				<div class="item-2 clearfix">
					<div class="grid_12">
						<div class="text">The region is located on the eponymous Zamboanga Peninsula of the island of Mindanao, that lies between the Moro Gulf (part of the Celebes Sea) and the Sulu Sea. Along the shores of the peninsula are numerous bays and islands of varying sizes. The peninsula is connected to the rest of Mindanao through an isthmus situated between Panguil Bay and Pagadian Bay. The region consists of the three Zamboanga provinces and the highly-urbanized independent city of Zamboanga, and the boundary between the peninsula and mainland is artificially marked by the border between the provinces of Zamboanga del Sur and Lanao del Norte.</div>
					</div>
					<!--<div class="grid_2">
						<div class="img_block"><img src="images/index_img-9.jpg" alt=""></div>
					</div>-->
				</div>
			</div>
		</div>
	</div>


	<div class="full-width-container block-4  parallax-block" data-stellar-background-ratio="0.5">
		<span class="el-1">Top Tourist</span>
		<span class="el-2">Spots</span>
		<a href="#" class="btn">more</a>
	</div>

	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="grid_4">
					<header>
						<h2><span>WHAT TO DO & WHERE TO GO</span></h2>
					</header>
					<div class="img_block"><img src="images/3.jpg" alt=""></div>
					<p class="first">Go island hopping and hit the beaches of Sibuguey Bay and Litayon Island. Feel the fine grains of white sand slotting in between your toes or simply frolic on the pristine beach waters. You can also catch the sight of magnificent sunset in Gubawang Beach, Naga or in Looc Labuan. If overnight swimming is your thing, then you might want to head to Anduhol Beach Resort in Ipil as well. Here you can witness kaleidoscopic sunrise, a view that will definitely make your sun-frying trip all worth it.</p>
					<!--<p class="secont">Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed <br> Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.</p>-->
					<a href="#" class="btn">more</a>
				</div>
				<div class="grid_7 offset_1">
					<header>
						<h2>Street dance showdown highlights Hermosa main program</h2>
					</header>
					<!--<h4><a href="#">10 Nov</a></h4>-->
					<div class="img_block"><img src="images/2.jpg" alt=""></div>
					<p>The highly charged street dance showdown highlighted the main program of the Zamboanga Hermosa Festival 2015 Saturday afternoon at the Paseo del Mar with 7 groups competing for the coveted title./p>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>

	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="grid_4">
					<div class="img_block"><img src="images/4.jpg" alt=""></div>
					<p class="first">Zamboanga Sibugay sunrise Image source: mamawme.blogspot.com
Step into the majestic Sibugay and you will be welcomed with a play of diversified panorama. Imagine a world of emerald waters and skies, of opulent hills and mountains, of endless lush vegetation and, of course, long strips of white sand beach shores neatly lined up.
</p>
					<!--<p class="secont">Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed <br> Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.</p>-->
					<a href="#" class="btn">more</a>
				</div>
				<div class="grid_7 offset_1">
					<!--<h4><a href="#">10 Nov</a></h4>-->
					<div class="img_block"><img src="images/5.jpg" alt=""></div>
					<p>The Sinunuc Barangay Council emerged as champion  in the open competition besting 2 other contestants and received P150,000 cash  prize for its amazing choreographed routines. Placing second was the Zamboanga City High School main with P100,000 cash prize while Don Pablo Lorenzo Memorial High School finished third with P50,000/p>
					<a href="#" class="btn">more</a>
				</div>
			</div>
		</div>
	</div>



	<!--<div class="full-width-container block-6">
		<div class="google-map-api">
			<div id="map-canvas" class="gmap"></div>
		</div>
	</div>-->
</section>

<!--=======footer=================================-->
<!--<footer id="footer">
	<div class="container">
		<div class="row">
		<div class="grid_12">
			<div class="copyright">
				<pre>© <span id="copyright-year"></span> |  Privacy Policy</pre>
			</div>
		</div>
				More Design Studio Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/design-studio-website-templates/" target="_blank">TemplateMonster.com</a>
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>-->
<script>
	jQuery(function(){
		jQuery('#camera_wrap').camera({
			height: '68.125%',
			thumbnails: false,
			pagination: true,
			fx: 'simpleFade',
			loader: 'none',
			hover: false,
			navigation: false,
			playPause: false,
			minHeight: "975px",
		});
	});
</script>
<!--script>
	var $container = $('.isotope');
	// init
	$container.on( 'click', '.iso-item', function( event ) {
	  // change size of item via class
	  $( event.target ).toggleClass('gigante');
	  // trigger layout
	  $container.packery();
	  /*$container.packery({
		  itemSelector: 'iso-.item',
		  gutter: 10*/

	});
</script-->
<script>
	$(document).ready(function() {
			if ($('html').hasClass('desktop')) {
				$.stellar({
					horizontalScrolling: false,
					verticalOffset: 20,
					resposive: true,
					hideDistantElements: true,
				});
			}
		});
</script>
<script type="text/javascript">
		google_api_map_init();
		function google_api_map_init(){
			var map;
			var coordData = new google.maps.LatLng(parseFloat(40.6894388), parseFloat(-73.9036233,10));

			var styleArray = [
				{"featureType":"water","stylers":[{"color":"#021019"}]},
				{"featureType":"landscape","stylers":[{"color":"#08304b"}]},
				{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0c4152"},{"lightness":5}]},
				{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#0b434f"},{"lightness":25}]},
				{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#0b3d51"},{"lightness":16}]},
				{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"}]},
				{"elementType":"labels.text.fill","stylers":[{"color":"#ffffff"}]},
				{"elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13}]},
				{"featureType":"transit","stylers":[{"color":"#146474"}]},
				{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},
				{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#144b53"},{"lightness":14},{"weight":1.4}]}
				]

			function initialize() {
			  var mapOptions = {
				zoom: 12,
				center: coordData,
				scrollwheel: false,
				styles: styleArray
			  }

			  var contentString = "<div></div>";
			  var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 200
			  });

			  var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);


			google.maps.event.addDomListener(window, 'resize', function() {

			  map.setCenter(coordData);

			  var center = map.getCenter();
			});
		}

			google.maps.event.addDomListener(window, "load", initialize);

		}
</script>
<script>
	$(function(){
		$('.isotope a').touchTouch();
	});
</script>

</body>
</html>
