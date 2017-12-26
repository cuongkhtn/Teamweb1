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
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<base href="{{asset('')}}">

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
				 @if(Auth::check())
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>{{Auth::user()->name}}</a></li>
						<li><a href="#">Thông tin</a></li>
						<li><a href="Logoutindex">Thoát</a></li>
					</ul>
				</div>
				@else
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="signup">Đăng kí</a></li>
						<li><a href="login">Đăng nhập</a></li>
					</ul>
				</div>
				 @endif
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
						<form action="{{route('search')}}" role="search" method="get" id="searchform" >
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					        <input type="text" value="" name="search" id="s" placeholder="Nhập từ khóa..." />
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script>
	<script src=" https://code.jquery.com/jquery-3.2.1.min.js"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<script src="qt69admin/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="qt69admin/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="qt69admin/assets/dest/vendors/animo/Animo.js"></script>
	<script src="qt69admin/assets/dest/vendors/dug/dug.js"></script>
<!-- 	<script src="qt69admin/assets/dest/js/scripts.min.js"></script> -->
	<script src="qt69admin/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="qt69admin/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- <script src="qt69admin/assets/dest/js/waypoints.min.js"></script> -->
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

	<script>
		var socket = io('http://localhost:6002')
        socket.on('comment:message',function(data){
        	if($('#'+data.id).length == 0){
                $('#data').append('<div class="media"> @if(' +data.loaiuser+ '!= 1)<a class="pull-left"><img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MSAoMzUzMjYpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPjJFODk0REU2LUQ3MTctNEU5Qi05NTA0LTgzRTdBMjBENkVDNzwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iZGVza3RvcCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IjAuMS1RJmFtcDtBLS1MYW5kaW5nIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNzQuMDAwMDAwLCAtMjA1LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyBpZD0iR3JvdXAtNCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAuMDAwMDAwLCA4Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJxdWVzdGlvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjQuMDAwMDAwLCAxMjMuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTIiPgogICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iaWNfYWNjb3VudF9jaXJjbGUiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlNoYXBlIiBwb2ludHM9IjAgMCAzNiAwIDM2IDM2IDAgMzYiPjwvcG9seWdvbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOCwwIEM4LjA2NCwwIDAsOC4wNjQgMCwxOCBDMCwyNy45MzYgOC4wNjQsMzYgMTgsMzYgQzI3LjkzNiwzNiAzNiwyNy45MzYgMzYsMTggQzM2LDguMDY0IDI3LjkzNiwwIDE4LDAgTDE4LDAgWiBNMTgsNS40IEMyMC45ODgsNS40IDIzLjQsNy44MTIgMjMuNCwxMC44IEMyMy40LDEzLjc4OCAyMC45ODgsMTYuMiAxOCwxNi4yIEMxNS4wMTIsMTYuMiAxMi42LDEzLjc4OCAxMi42LDEwLjggQzEyLjYsNy44MTIgMTUuMDEyLDUuNCAxOCw1LjQgTDE4LDUuNCBaIE0xOCwzMC45NiBDMTMuNSwzMC45NiA5LjUyMiwyOC42NTYgNy4yLDI1LjE2NCBDNy4yNTQsMjEuNTgyIDE0LjQsMTkuNjIgMTgsMTkuNjIgQzIxLjU4MiwxOS42MiAyOC43NDYsMjEuNTgyIDI4LjgsMjUuMTY0IEMyNi40NzgsMjguNjU2IDIyLjUsMzAuOTYgMTgsMzAuOTYgTDE4LDMwLjk2IFoiIGlkPSJTaGFwZSIgZmlsbD0iIzgwODA4MCI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K" alt="" ></a>@else<a class="pull-left" href="#"><img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MSAoMzUzMjYpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPjgyNjVFQjJBLTkzNEItNDM0QS04NEM2LUQ3MzM3MTYwMzczNjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iZGVza3RvcCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IjAuMS1RJmFtcDtBLS1MYW5kaW5nIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNzQuMDAwMDAwLCAtMjY1LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyBpZD0iR3JvdXAtNCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAuMDAwMDAwLCA4Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJxdWVzdGlvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjQuMDAwMDAwLCAxMjMuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImFuc3dlciIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDYwLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0ic2VsbGVyLWljb24iPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGVsbGlwc2UgaWQ9Ik92YWwtMiIgZmlsbD0iIzFBOUNCNyIgY3g9IjE4IiBjeT0iMTgiIHJ4PSIxOCIgcnk9IjE4Ij48L2VsbGlwc2U+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iaWNfc3RvcmVfbWFsbF9kaXJlY3RvcnkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQuNTAwMDAwLCA0LjUwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxnIGlkPSJJY29uLTI0cHgiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cG9seWdvbiBpZD0iU2hhcGUiIHBvaW50cz0iMCAwIDI3IDAgMjcgMjcgMCAyNyI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjIuNSw0LjUgTDQuNSw0LjUgTDQuNSw2Ljc1IEwyMi41LDYuNzUgTDIyLjUsNC41IEwyMi41LDQuNSBaIE0yMy42MjUsMTUuNzUgTDIzLjYyNSwxMy41IEwyMi41LDcuODc1IEw0LjUsNy44NzUgTDMuMzc1LDEzLjUgTDMuMzc1LDE1Ljc1IEw0LjUsMTUuNzUgTDQuNSwyMi41IEwxNS43NSwyMi41IEwxNS43NSwxNS43NSBMMjAuMjUsMTUuNzUgTDIwLjI1LDIyLjUgTDIyLjUsMjIuNSBMMjIuNSwxNS43NSBMMjMuNjI1LDE1Ljc1IEwyMy42MjUsMTUuNzUgWiBNMTMuNSwyMC4yNSBMNi43NSwyMC4yNSBMNi43NSwxNS43NSBMMTMuNSwxNS43NSBMMTMuNSwyMC4yNSBMMTMuNSwyMC4yNSBaIiBpZD0iU2hhcGUiIGZpbGw9IiNGRkZGRkYiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="" ></a>@endif<div class="media-body" style="margin-top: -17px" ><p class="single-item-title">'+data.name+' <small>'+data.created_at+'</small></p><p style="font-weight:500">'+data.NoiDung+'</p><hr></div></div>')
            }
              console.log(data)
        })
	</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.11&appId=1995906300690974';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>
