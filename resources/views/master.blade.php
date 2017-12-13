<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shophoa360</title>
	<base href="{{asset('')}}">
	<link href='https://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="qt69admin/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="qt69admin/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="qt69admin/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="qt69admin/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" href="qt69admin/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="qt69admin/assets/dest/css/huong-style.css">
	<link rel="stylesheet" title="style" href="qt69admin/assets/dest/css/style.css">
</head>
<body>
	
	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 227 Nguyễn Văn Cừ, Phường 4, Quận 5</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0165 723 5365</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="dang-ki">Đăng kí</a></li>
						<li><a href="dang-nhap">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="/" id="logo"><img src="qt69admin/assets/dest/images/logo.jpg" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="qt69admin/assets/dest/images/products/cart/1.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="qt69admin/assets/dest/images/products/cart/2.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="qt69admin/assets/dest/images/products/cart/3.png" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">Sample Woman Top</span>
											<span class="cart-item-options">Size: XS; Colar: Navy</span>
											<span class="cart-item-amount">1*<span>$49.50</span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="/">Trang chủ</a></li>
						<!--  <li><a href="{{route('trang-chu')}}">Trang chủ</a></li> -->
						<li><a href="#
							">Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($menu as $mn)
								<li><a href={{route('san-pham',$mn->id)}}>{{$mn->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="about">Giới thiệu</a></li>
						<li><a href="contacts">Liên hệ</a></li>
					</ul>
					<div class="clearfi	x"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->

	@yield('content')

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Instagram Feed</h4>
						<div id="beta-instagram-feed"><div></div></div>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Thông Tin</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Liên Hệ</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>227 Nguyễn Văn Cừ P4 Quận 5 Phone: +84 1657235365</p>
								<p>Hoặc liên lạc qua địa chỉ Mail  Cuonganh365@gmail.com</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Đăng ký nhận tin</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="qt69admin/assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="qt69admin/assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="qt69admin/assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="qt69admin/assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="qt69admin/assets/dest/js/jquery.js"></script>
	<script src="qt69admin/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="qt69admin/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="qt69admin/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="qt69admin/assets/dest/vendors/animo/Animo.js"></script>
	<script src="qt69admin/assets/dest/vendors/dug/dug.js"></script>
	<script src="qt69admin/assets/dest/js/scripts.min.js"></script>
	<script src="qt69admin/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="qt69admin/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="qt69admin/assets/dest/js/waypoints.min.js"></script>
	<script src="qt69admin/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="qt69admin/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
