<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.html"><img src="images/logo2.png" alt=" " /><h1>NEXT<span>Project</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+6289631551715</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li class=" active"><a href="index.html" class="hyper "><span>Beranda</span></a></li>
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Fashion<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baju Pria</a></li>
												<li><a href="men.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Baju anak-anak</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Baju Pesta</a></li>

											</ul>

										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
											</ul>
										</div>
										<!-- <div class="clearfix"></div> -->
									</div>
								</ul>
						</li>
						<li><a href="about.php" class="hyper"><span>Tentang</span></a></li>
						<li><a href="contact.php" class="hyper"><span>Hubungi Kami</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');
						}
					);
				});
				</script>
		<div class="col-md-3 search-agileinfo">
			<form action="men.php" method="get">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<!-- <div class="col-md-1 cart-wthree">
			<form action="checkout.php" method="get">
				<button type="submit" class="btn btn-default" aria-label="Left Align"></button>
			</form>
		</div> -->
		<div class="col-md-1 cart-wthree">
			<div class="cart">
				<form action="#" method="post" class="last">
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart">
				<br>
				<a href="checkout.php"><span>Checkout</span></a>
				<!-- <span><img src="http://www.great-alaska-seafood.com/fishbox/secure_checkout-button-mobile.png" width="200" height="50"></span> -->
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>