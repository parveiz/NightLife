<?php session_start() ?>

<!doctype html>

<html>

<head>
<title>NightLife</title>
<meta charset="utf-8">
<meta name="description"
	content="travel, trip, store, shopping, siteweb, cart">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300'
	rel='stylesheet' type='text/css' />
<link
	href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic'
	rel='stylesheet' type='text/css' />
<link
	href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
	rel='stylesheet' type='text/css' />
<link
	href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic'
	rel='stylesheet' type='text/css' />


<link href="../web/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="../web/css/font-awesome-4.6.3/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="../web/css/jquery-ui-1.10.4.custom.min.css" rel="stylesheet"
	type="text/css" />
<link href="../web/css/animate.css" rel="stylesheet" type="text/css" />
<link href="../web/css/settings_slide2.css" rel="stylesheet"
	type="text/css" />
<link href="../web/css/travel-mega-menu.css" rel="stylesheet"
	type="text/css" />
<link href="../web/css/jquery.bxslider.css" rel="stylesheet"
	type="text/css" />
<link href="../web/css/layout2.css" rel="stylesheet" type="text/css" />
<link href="../web/css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="loader-wrapper">
		<div id="loader"></div>
	</div>
        
        <?php require './templates/login.php';  ?>
        <?php require './templates/header.php';  ?>
        <?php require './templates/search.php';  ?>
        
        <!-- TOP OFFERTS -->

	<section id="top-offerts" class='home4-section'>
		<div class="container">
			<div class="row">
				<div class="col-md-12 effect-5 effects no-border-img">

					<div class="text-center top-txt-title best-promo">
						<h2>OUR BEST PROMOTIONS</h2>
						<div class="separator">
							<div class="separator-style"></div>
						</div>
						<p>Please register with us to get valuable discounts.</p>
					</div>

					<!-- FIFTH EXAMPLE -->
					<div class="col-md-4 trip-travego-disc">
						<div class="trip-discount triggerAnimation animated"
							data-animate="zoomIn" style="animation-delay: 400ms;">Save 20%</div>
						<div class="view view-fifth">
							<figure class="triggerAnimation animated"
								data-animate="fadeInDown">
								<div class="img-effect-flash">
									<img src="https://unsplash.it/640/462?image=763" alt="" />
								</div>
							</figure>
							<div class="mask">
								<div class="main">
									<div class="trip-title">
										<h3>Nigh Club</h3>
										<br />
										<p>Paris</p>
									</div>
									<div class="price">
										<p>From</p>
										499$
									</div>
								</div>
								<div class="content">
									<p>
										<span>A modern and luxurious night club.</span> Some more
										information about the club.
									</p>
									<a href="details.html" class="btn btn-primary btn-block">Show
										Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 trip-travego-disc">
						<div class="trip-discount triggerAnimation animated"
							data-animate="zoomIn" style="animation-delay: 700ms;">Save 30%</div>
						<div class="view view-fifth">
							<figure class="triggerAnimation animated"
								data-animate="fadeInDown">
								<div class="img-effect-flash">
									<img src="https://unsplash.it/640/462?image=546" alt="" />
								</div>
							</figure>
							<div class="mask">
								<div class="main">
									<div class="trip-title">
										<h3>Club de Clasico</h3>
										<br />
										<p>Madrid</p>
									</div>
									<div class="price">
										<p>From</p>
										349 $
									</div>
								</div>
								<div class="content">
									<p>
										<span>The identification of madrid night club.</span> Some
										more lines for the club.
									</p>

									<a href="details.html" class="btn btn-primary btn-block">Show
										Details</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 trip-travego-disc">
						<div class="trip-discount triggerAnimation animated"
							data-animate="zoomIn" style="animation-delay: 1000ms;">Save 15%</div>
						<div class="view view-fifth">
							<figure class="triggerAnimation animated"
								data-animate="fadeInDown">
								<div class="img-effect-flash">
									<img src="https://unsplash.it/640/462?image=513" alt="" />
								</div>
							</figure>
							<div class="mask">
								<div class="main">
									<div class="trip-title">
										<h3>Golf Club</h3>
										<br />
										<p>Milan</p>
									</div>
									<div class="price">
										<p>From</p>
										799$
									</div>
								</div>
								<div class="content">
									<p>
										<span>Golf club</span> Some more lines. Must be two lines in
										order to get equal boxes
									</p>

									<a href="details.html" class="btn btn-primary btn-block">Show
										Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Close col 12 -->
			</div>
		</div>
	</section>

	<section class='parallax-home'>
		<div class="container">
			<div class="row">
				<div class="col-md-4 middle-text-adv">
					<div class="main-info">
						<h3>Why NightLife</h3>
						<div class="line-left"></div>
						<p>We make sure that you get best of the city you are in. Our
							service and quality is of topclass.</p>
						<p>Our parnters are selected as the bests in the city.</p>
						<p>Spend no time sitting and wondering where to go.</p>
					</div>
				</div>
				<div class='col-md-8'>

					<div class='col-md-6'>
						<div class='grid-info'>
							<div class='grid-icon'>
								<i class="fa fa-check-square"></i>
							</div>
							<h5 class="grid-title ">EASY TO USE</h5>
							<div class="grid-desc">
								<p>Simple use with 3 simple steps.</p>
							</div>
						</div>
					</div>
					<div class='col-md-6'>
						<div class='grid-info'>
							<div class='grid-icon'>
								<i class="fa fa-percent"></i>
							</div>
							<h5 class="grid-title ">VALUEABLE DISCOUNT</h5>
							<div class="grid-desc">
								<p>Get valuable discounts with our partners and enjoy your
									visit.</p>
							</div>
						</div>
					</div>
					<div class='col-md-6'>
						<div class='grid-info'>
							<div class='grid-icon'>
								<i class="fa fa-unlock-alt"></i>
							</div>
							<h5 class="grid-title ">TRUST AND SECURITY</h5>
							<div class="grid-desc">
								<p>Our Partners are selected as the best in the market. No
									worries of any low quality or service.</p>
							</div>
						</div>
					</div>

					<div class='col-md-6'>
						<div class='grid-info'>
							<div class='grid-icon'>
								<i class="fa fa-cutlery"></i>
							</div>
							<h5 class="grid-title ">BEST FOOD</h5>
							<div class="grid-desc">
								<p>Enjoy your meal by best chefs around the world.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="parallax_slide" class="service2-prx">
		<div class="effect-over">
			<div class="bx-about2">
				<ul class="bxslider all-info-trip long-pannel">
					<li><img src="http://placehold.it/1920x600" alt="" />
						<div class="cover-slide-trip"></div>
						<div class="trip-slide-price col-md-5">
							<div class="trip-slide-text prague">
								Paris <br /> <br />
							</div>
							<br />
							<p>Nestled between the Caribbean, the South Pacific, and the
								South Atlantic Oceans, South America is the wilder of the
								Americas, and a continent of superlatives...</p>
							<br /> <a href="#" class="btn btn-primary btn-gallery">Search Now</a>
						</div></li>
					<li><img src="http://placehold.it/1920x600" alt="" />
						<div class="cover-slide-trip"></div>
						<div class="trip-slide-price col-md-5">
							<div class="trip-slide-text prague">
								Venice <br /> <br />
							</div>
							<br />
							<p>Nestled between the Caribbean, the South Pacific, and the
								South Atlantic Oceans, South America is the wilder of the
								Americas, and a continent of superlatives...</p>
							<br /> <a href="#" class="btn btn-primary btn-gallery">Search Now</a>
						</div></li>
					<li><img src="http://placehold.it/1920x600" alt="" />
						<div class="cover-slide-trip"></div>
						<div class="trip-slide-price col-md-5">
							<div class="trip-slide-text prague">
								London <br /> <br />
							</div>
							<br />
							<p>Nestled between the Caribbean, the South Pacific, and the
								South Atlantic Oceans, South America is the wilder of the
								Americas, and a continent of superlatives...</p>
							<br /> <a href="#" class="btn btn-primary btn-gallery">Search Now</a>

						</div></li>
					<li><img src="http://placehold.it/1920x600" alt="" />
						<div class="cover-slide-trip"></div>
						<div class="trip-slide-price col-md-5">
							<div class="trip-slide-text prague">
								Prague <br /> <br />
							</div>
							<br />
							<p>Nestled between the Caribbean, the South Pacific, and the
								South Atlantic Oceans, South America is the wilder of the
								Americas, and a continent of superlatives...</p>
							<br /> <a href="#" class="btn btn-primary btn-gallery">Search Now</a>

						</div></li>
				</ul>
			</div>
			<!--Close col-md-12-->
		</div>
	</section>

	<section id="parallax-footer" class="price-color-log">
		<div class="effect-over">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-md-4 prices content-blue">
							<div class="price-table-circle basic blue-prices">
								<div class="price-circle">
									<div class="price-title">
										<h3>Silver</h3>
									</div>
									<div class="price-money">
										<h3>
											$100<span>/month</span>
										</h3>
									</div>
									<ul>
										<li>
											<p>Upto 5% discounts on Clubs</p>
										</li>
										<li>
											<p>Reservation on Hold</p>
										</li>
										<li>
											<p>Membership Card fee ($20 / year)</p>
										</li>
										<li>
											<p>1 Free drinks</p>
										</li>
										<li>
											<p>Excursion 5% discount</p>
										</li>
										<li class="price-info"><a href="" class="btn btn-success">Register
												Now</a></li>
									</ul>

								</div>
							</div>
						</div>
						<div class="col-md-4 prices content-green">
							<div class="price-table-circle medium green-prices">
								<div class="price-circle">
									<div class="price-title">
										<h3>Gold</h3>
									</div>
									<div class="price-money">
										<h3>
											$300<span>/month</span>
										</h3>
									</div>
									<ul>
										<li>
											<p>Upto 15% discount on Clubs</p>
										</li>
										<li>
											<p>Instant Reservation</p>
										</li>
										<li>
											<p>Membership Card Fee ($10 / year)</p>
										</li>
										<li>
											<p>Excursion 8% discount</p>
										</li>
										<li>
											<p>Soft Inclusive</p>
										</li>
										<li class="price-info"><a href="" class="btn btn-success">Register
												Now</a></li>
									</ul>

								</div>
							</div>
						</div>
						<div class="col-md-4 prices content-red">
							<div class="price-table-circle premium red-prices">
								<div class="price-circle">
									<div class="price-title">
										<h3>Platinum</h3>
									</div>
									<div class="price-money">
										<h3>
											$500<span>/month</span>
										</h3>
									</div>
									<ul>
										<li>
											<p>Upto 20% discount on Clubs</p>
										</li>
										<li>
											<p>Instant Reservation</p>
										</li>
										<li>
											<p>Membership Card Fee (Free)</p>
										</li>
										<li>
											<p>Excursion 10% discount</p>
										</li>
										<li>
											<p>All Inclusive</p>
										</li>
										<li class="price-info"><a href="" class="btn btn-success">Register
												Now</a></li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<!--Close col-md-12-->
				</div>
			</div>
		</div>
	</section>

	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4">
						<img class='logo-footer' src='../web/images/loyalty.png'
							alt='logo' />
						<p>NightLife Program intro.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque arcu lorem, mattis quis convallis ac</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Quisque arcu lorem, mattis quis convallis ac</p>
					</div>
					<div class="col-md-4 footer-zone">
						<h3>CONTACTS</h3>
						<p>
							<i class="fa fa-map-marker"></i>Address: ABCDEF Road 12-345
						</p>
						<p>
							<i class="fa fa-phone"></i>Phone: +001 2345678910
						</p>
						<p>
							<i class="fa fa-envelope-o"></i>Mail: info@nightlife.com
						</p>
						<p>
							<i class="fa fa-globe"></i>testimonial@nightlife.com
						</p>
						<div class="socialfooter">
							<a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
								class="fa fa-twitter"></i></a> <a href="#"><i
								class="fa fa-instagram"></i></a> <a href="#"><i
								class="fa fa-google"></i></a>
						</div>
					</div>

					<div class="col-md-3">
						<h3>NEWSLETTER</h3>
						<p>Join our news letter and get updated with latest news, latest
							added partners and much more.</p>

						<!--start form-->
						<form class="newsletterfooter">
							<input type="text" /> <input type="submit" /> <i
								class="fa fa-angle-right"></i>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="col-xs-6 copyright">Copyrights © Loyalty 2016 All
							Rights Reserved</div>
						<div class="col-xs-6 payment-card">
							<img src="http://placehold.it/100x30" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="../web/js/modernizr.js" type="text/javascript"></script>
	<script src="../web/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="../web/js/jquery-migrate-1.2.1.min.js"
		type="text/javascript"></script>
	<script src="../web/js/jquery-ui-1.10.4.custom.min.js"
		type="text/javascript"></script>
	<script src="../web/js/jquery.easing.1.3.js"></script>
	<!-- waypoint -->
	<script type="text/javascript" src="../web/js/waypoints.min.js"></script>
	<!--Preload-->
	<script type="text/javascript">
        $(document).ready(function ($) {
            "use strict";
            try {
                var myTimer = 0;
                clearTimeout(myTimer);
                myTimer = setTimeout(function () {
                    $("#loader-wrapper").slideUp()
                }, 2000);
            } catch (err) {
            }
        });
    </script>

	<script src="../web/js/jquery.themepunch.plugins.min.js"
		type="text/javascript"></script>
	<script src="../web/js/jquery.themepunch.revolution.min.js"
		type="text/javascript"></script>
	<script type="text/javascript">
        var tpj = jQuery;
        tpj(document).ready(function () {
            "use strict";
            if (tpj.fn.cssOriginal !== undefined)
                tpj.fn.css = tpj.fn.cssOriginal;
            tpj('.fullwidthbanner').revolution(
                    {
                        delay: 9000,
                        startwidth: 1170,
                        startheight: 646,
                        onHoverStop: "on",
                        thumbWidth: 100,
                        thumbHeight: 50,
                        thumbAmount: 4,
                        hideThumbs: 200,
                        navigationType: 'none',
                        navigationArrows: "verticalcentered", //nexttobullets, verticalcentered, none
                        navigationStyle: "large",
                        touchenabled: "on",
                        navOffsetHorizontal: 0,
                        navOffsetVertical: 20,
                        fullWidth: "on",
                        shadow: 0
                    });
        });
    </script>

	<script type="text/javascript" src="../web/js/bootstrap.min.js"></script>
	<script src="../web/js/bootstrap-hover-dropdown.min.js"
		type="text/javascript"></script>
	<!--bxSlider-->
	<script src="../web/js/jquery.bxslider.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            $('.bxslider').bxSlider({
                auto: true
            });
        });
    </script>

	<script src="../web/js/script.js" type="text/javascript"></script>
</body>

</html>
