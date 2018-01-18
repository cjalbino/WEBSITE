<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Zamboanga del Norte</title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/touchTouch.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
			 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


	<script src="js/jquery.js"></script>
	<script src="js/touchTouch.jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="js/packery.pkgd.min.js"></script>
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
<body class="index-1">
<!--==============================header=================================-->
<header id="header">
	<div id="stuck_container">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<div class="social">
						<a href="#"><span class="bd-ra fa fa-facebook"></span></a>
						<a href="#"><span class="bd-ra fa fa-tumblr"></span></a>
						<a href="#"><span class="bd-ra fa fa-google-plus"></span></a>
					</div>
					<h1><a href="index.html">Zamboanga Peninsula<span> </span></a></h1>
					<nav>
						<ul class="sf-menu">
							<li><a href="index.html">Home</a></li>
							<li class="current"><a href=" ">Provinces</a>
									<ul>
										<li><a href="{{ route('zamdelnorte') }}">Zamboanga del Norte</a></li>
										<li><a href="{{ route('zamdelsur') }}">Zamboanga del Sur</a>
											<!--<ul>
												<li><a href="#">Lorem ipsum</a></li>
												<li><a href="#">Lorem ipsum</a></li>
												<li><a href="#">Lorem ipsum</a></li>
											</ul>-->
										</li>
										<li><a href="{{ route('zamsibugay') }}">Zamboanga Sibugay</a></li>
									</ul>
								</li>
							<li><a href="{{ route('index') }}">Destination</a></li>
							<li><a href="{{ route('blog') }}">Forum</a></li>
							<li><a href="{{ route('index') }}">About Us</a></li>
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
<br>
	<div class="full-width-container block-5">
		<div class="container">
			<div class="row">
				<div class="item-1 clearfix">
					<header>
						<center><h2><span>Zamboanga del Norte</span></h2></center>
					</header>
					<!--<div class="grid_2">
						<div class="img_block"><img src="images/index_img-8.jpg" alt=""></div>
					</div>-->
					<div class="grid_12">

						<div class="text">Zamboanga del Norte is situated in Northern Mindanao. It is bounded on the north and west by the Sulu Sea, on the east by Misamis Occidental, and on the south by Zamboanga del Sur.
The province occupies a total land area of 6,618 square kilometers. It has an average elevation of 243.8 meters, with Mt. Dabiak in Katipunan as the highest peak at 2,600 meters. Other parts, near the coastlines, are plains. The province’s irregular coastline runs 400 kilometers from north to south. <br> <br>
Zamboanga del Norte is subdivided into 25 municipalities and 2 cities. These are further subdivided into 691 barangays, and clustered into 3 congressional districts..
</div>
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

	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Cities</h3>

								<div class="box-tools">
	                <div class="input-group input-group-sm" style="width: 140px;">
	                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

	                </div>
	              </div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body table-responsive no-padding">
	              <table class="table table-hover">
	                <tr>
	                  <th>Zip Code</th>
	                  <th>Name</th>
	                  <th>Population</th>
	                  <th>Description</th>
	                </tr>
	                <tr>
	                  <td>7100</td>
	                  <td>Dipolog City</td>
	                  <td>  <div class="progress progress-xs progress-striped active">
	                      <div class="progress-bar progress-bar-success" style="width: 90%"></div>
	                    </div></td>
	                  <td>A third class city and the capital of the province of Zamboanga del Norte. It has a population of 130,759 people </td>
	                </tr>
	                <tr>
	                  <td>7101</td>
	                  <td>Dapitan City</td>
	                  <td><div class="progress progress-xs progress-striped active">
	                      <div class="progress-bar progress-bar-success" style="width: 80%"></div>
	                    </div></td>
	                  <td>A third class city in the province of Zamboanga del Norte.  It has a population of 82,418 people.</td>
	                </tr>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
	      </div>
	    </section>
	    <!-- /.content -->
	  </div>
</div>
</div>


<div class="full-width-container block-2">
	<div class="container">
		<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Municipalities</h3>

							<div class="box-tools">
								<div class="input-group input-group-sm" style="width: 140px;">
									<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

								</div>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body table-responsive no-padding">
							<table class="table table-hover">
								<tr>
									<th>Zip Code</th>
									<th>Name</th>
									<th>Population</th>
									<th>Description</th>
								</tr>
								<tr>
									<td>7102</td>
									<td>Roxas</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 39%"></div>
										</div></td>
									<td>A second class municipality in the province of Zamboanga del Norte, Philippines named after Philippine president Manuel Roxas. It has a population of 39,323 people.</td>
								</tr>
								<tr>
									<td>7103</td>
									<td>Sibutad</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 17%"></div>
										</div></td>
									<td>A fifth class municipality in the province of Zamboanga del Norte, Philippines. It has a population of 17,645 people.</td>
								</tr>
								<tr>
									<td>7104</td>
									<td>Rizal</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 14%"></div>
										</div></td>
									<td>A fifth class municipality in the province of Zamboanga del Norte, Philippines. According to the 2015 census, it has a population of 14,021 people.</td>
								</tr>
								<tr>
									<td>7105</td>
									<td>Pinan</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 20%"></div>
										</div></td>
									<td>A fourth class municipality in the province of Zamboanga del Norte. It has a population of 20,161 people.</td>
								</tr>
								<tr>
									<td>7106</td>
									<td>Polanco</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 39%"></div>
										</div></td>
									<td>A third class municipality in the province of Zamboanga del Norte, Philippines. According to the 2015 census, it has a population of 39,347 people.</td>
								</tr>
								<tr>
									<td>7107</td>
									<td>Mutia</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 12%"></div>
										</div></td>
									<td>A fifth class municipality in the province of Zamboanga del Norte, Philippines. It has a population of 12,675 people.</td>
								</tr>
								<tr>
									<td>7108</td>
									<td>Sergio Osmena</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 30%"></div>
										</div></td>
									<td>A second class municipality in the province of Zamboanga del Norte, named in honor of former Philippine president Sergio Osmeña. It has a population of 30,220 people.</td>
								</tr>
								<tr>
									<td>7109</td>
									<td>Katipunan</td>
									<td><div class="progress progress-xs progress-striped active">
											<div class="progress-bar progress-bar-success" style="width: 45%"></div>
										</div></td>
									<td>A second class municipality in the province of Zamboanga del Norte. It has a population of 45,577 people.</td>
								</tr>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>
		<!-- /.content -->
	</div>
</div>
</div>


<center>
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>Elected Government Officials</span></h2>
					</header>
				</div>
				<div id="touch_gallery">
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-1-big.jpg"><img src="images/index-1_img-1.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Roberto Yu Uy</h4>
							<p>Governor of Zamboanga del Norte</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-2-big.jpg"><img src="images/index-1_img-2.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Senen Angeles</h4>
							<p>Vice-Governor of Zamboanga del Norte</p>
						</article>
					</div></center>
					<!--<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-3-big.jpg"><img src="images/index-1_img-3.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Sentro Merid</h4>
							<p>Famus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros eto.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-4-big.jpg"><img src="images/index-1_img-4.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Berto Mero</h4>
							<p>Samus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eroserto.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-5-big.jpg"><img src="images/index-1_img-5.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Ferlima Nestro</h4>
							<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-6-big.jpg"><img src="images/index-1_img-6.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Werdo Dasr</h4>
							<p>Lamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eroso.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Daslom Gerto</h4>
							<p>Wamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eroser.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-8-big.jpg"><img src="images/index-1_img-8.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Liro Dast</h4>
							<p>Kamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis erose.</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-9-big.jpg"><img src="images/index-1_img-9.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Severty Opor</h4>
							<p>Gamus at magna non nunc tristique rhoncuseri tym. Aliquam nibh ante, egestas id dictum aterert commodo re luctus libero. Praesent faucibus malesuada cibuste. Donec laoreet metus id laoreet malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.</p>
						</article>
					</div>-->
				</div>
			</div>
		</div>
	</div>


	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span>House of Representative</span></h2>
					</header>
				</div>
				<div id="touch_gallery">
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-3-big.jpg"><img src="images/index-1_img-3.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Seth Frederick P. Jalosjos</h4>
							<p>1st District Congressman</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-4-big.jpg"><img src="images/index-1_img-4.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Rosendo S. Labadlabad</h4>
							<p>2nd District Congressman</p>
						</article>
					</div>
					<div class="grid_4">
						<div class="img_block"><a href="images/index-1_img-5-big.jpg"><img src="images/index-1_img-5.jpg" alt="Services"><i>+</i></a></div>
						<article>
							<h4>Isagani Sybico Amatong</h4>
							<p>3rd District Congressman</p>
						</article>
					</div>
				</div>
			</div>
		</div>

	</div>


<div class="full-width-container block-1">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<header>
					<h2><span>First District Member, Sangguniang Panlalawigan (Board Members</span></h2>
				</header>
			</div>
			<div id="touch_gallery">
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-6-big.jpg"><img src="images/index-1_img-6.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Cabigon, Fernando Jr. Restollas</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Zamora, Joven Hamac</h4>
						<p>Sentence---</p>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="full-width-container block-1">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<header>
					<h2><span>Second District Member, Sangguniang Panlalawigan (Board Members)</span></h2>
				</header>
			</div>
			<div id="touch_gallery">
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-6-big.jpg"><img src="images/index-1_img-6.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Napigquit, Julius Cabilin</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Lee, Ronillo Dua</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Decierdo, Crisologo Alima</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Soliva, Romulo Puralan</h4>
						<p>Sentence---</p>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="full-width-container block-1">
	<div class="container">
		<div class="row">
			<div class="grid_12">
				<header>
					<h2><span>Third District Member, Sangguniang Panlalawigan (Board Members):</span></h2>
				</header>
			</div>
			<div id="touch_gallery">
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-6-big.jpg"><img src="images/index-1_img-6.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Carloto, Angel Melicor</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Brillantes, Ruth Maraon</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Uy, Venus Arancana</h4>
						<p>Sentence---</p>
					</article>
				</div>
				<div class="grid_4">
					<div class="img_block"><a href="images/index-1_img-7-big.jpg"><img src="images/index-1_img-7.jpg" alt="Services"><i>+</i></a></div>
					<article>
						<h4>Torrino, Luzviminda Estrada</h4>
						<p>Sentence---</p>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>

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
		</div>
	</div>
	<div class="footer_bottom"><a href="http://www.templatemonster.com/" rel="nofollow"><img src="images/footer-logo.png" alt="logo"></a></div>
</footer>-->
<script>
	$(function(){
		$('#touch_gallery a').touchTouch();
	});
</script>

</body>
</html>
