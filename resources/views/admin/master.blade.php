<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html >
	<head>
		<title>DO_AN</title>
		<link href="{!!asset('qt64_admin/css/style.css')!!}" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Android web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
		<link href='//fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{!!asset('qt64_admin/css/responsiveslides.css')!!}">
		<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'> <!-- login -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> <!-- login -->
      <link rel="stylesheet" href='qt64_admin/css/style_login.css'> <!-- login -->

		<script src="{!!asset ('qt64_admin/js/jquery.min.js')!!}"></script>
		<script src="{!!asset('qt64_admin/js/responsiveslides.min.js')!!}"></script>

		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		@include('admin.connect')
		@include('admin.sign_up')
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#">Register</a></li>
					<li><a href="#" id="mylogin">Login</a></li>
					<li><a href="#">Delivery</a></li>
					<li><a href="#">Checkout</a></li>
					<li><a href="#">My account</a></li>
					<li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>
		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="home"><img src="qt64_admin/images/logo.png" title="logo" /></a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->
		<div class="top-nav">
			<ul>
				<li><a href="home">Home</a></li>
				<li><a href="about">About</a></li>
				<li><a href="store">Store</a></li>
				<li><a href="featured">Featured</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="contact">Contact</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
					<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="qt64_admin/images/1.png" alt=""></li>
					      <li><img src="qt64_admin/images/2.png" alt=""></li>
					      <li><img src="qt64_admin/images/1.png" alt=""></li>
					    </ul>
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					</div>
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="single"><img src="qt64_admin/images/grid-img1.jpg"></a>
					  <h3>Lorem Ipsum is simply dummy text </h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					   <a href="single"><img src="qt64_admin/images/grid-img2.jpg"></a>
					  <h3>Lorem Ipsum is simply dummy text </h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="single"><img src="qt64_admin/images/grid-img3.jpg"></a>
					  <h3>Lorem Ipsum is simply dummy text </h3>
				</div>
			</div>
		    	</div>
		    	
		    <div class="content-grids">
		    	<h4>Deals of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m1.jpg">
					 <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$260</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m2.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$150</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m7.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$130</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m4.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$460</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m2.jpg">
					 <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$260</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m6.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$100</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m7.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$180</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="qt64_admin/images/m1.jpg">
					  <a href="single">Duis aute irure dolor in reprehenderit sed do eiusmod tempor incididunt</a>
					 <h3>$140</h3>
					 <ul>
					 	<li><a  class="cart" href="single"> </a></li>
					 	<li><a  class="i" href="single"> </a></li>
					 	<li><a  class="Compar" href="single"> </a></li>
					 	<li><a  class="Wishlist" href="single"> </a></li>
					 </ul>
				</div>
			</div>
		    
		    	</div>
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
							<li><a href="#">Accord Mobiles</a></li>
							<li><a href="#">Ace Mobile</a></li>
							<li><a href="#">Acer Mobile</a></li>
							<li><a href="#">Airfone</a></li>
							<li><a href="#">Apple</a></li>
							<li><a href="#">Blackberry</a></li>
							<li><a href="#">Byond Tech</a></li>
							<li><a href="#">Celkon Mobiles</a></li>
							<li><a href="#">Dell Mobile Phones </a></li>
							<li><a href="#">Fly Mobile</a></li>
							<li><a href="#">Fujezone Mobiles </a></li>
							<li><a href="#">HTC</a></li>
							<li><a href="#">LG Mobiles</a></li>
							<li><a href="#">Longtel Mobile</a></li>
							<li><a href="#">Maxx</a></li>
							<li><a href="#">Micromax Mobiles </a></li>
							<li><a href="#">Samsung Mobiles</a></li>
							<li><a href="#">Sony Ericsson Mobiles</a></li>
							<li><a href="#">Wynncom Mobiles</a></li>
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Our Info</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest-News</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					<h3>Order-online</h3>
					<p>080-1234-56789</p>
					<p>080-1234-56780</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>News-Letter</h3>
					<form>
						<input type="text"><input type="submit" value="go" />
					</form>
					<h3>Follow Us:</h3>
					 <ul>
					 	<li><a href="#"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="#"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
					 	<li><a href="#"><img src="images/rss.png" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>
		
		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>&copy; 2013 Mobile Store. All Rights Reserved | Design by  <a href="http://w3layouts.com/">W3Layouts</a></p>
		</div>
		</div>
		</div>

	</body>

	 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
    <script  src="qt64_admin/js/login.js"></script>
    <script src="qt64_admin/js/event.js"></script>

</html>

