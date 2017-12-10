@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							<img src="qt69admin/image/product/{{$chitiet->image}}" alt="cường đẹp trai =)))"  height="243px" width="100%">	
							@if($chitiet -> giakm!=0)
													<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
												@endif
						</div>
						<div class="col-sm-8">							
							<div class="single-item-body">
								<p class="single-item-title">{{$chitiet->name}}</p>
								<p class="single-item-price">
											@if($chitiet -> giakm!=0)
													<span class="flash-del">{{$chitiet->gia}} VND</span>
													<span class="flash-sale">{{$chitiet->giakm}} VND</span> 
												@else
													<span class="flash-sale">{{$chitiet->gia}} VND</span>
												@endif
										</p>
							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>Bó hoa cưới cầm tay Mùa Của Yêu Thương là sắc thắm của mùa hè, xanh, đỏ, cam, trắng tạo vẻ trẻ trung cho ngày cưới của bạn.</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Tùy chọn:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số lượng:</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="chitiet"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="chitiettab-description">Description</a></li>
							<li><a href="chitiettab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
							<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>No Reviews</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản phẩm tương tự</h4>

						<div class="row" id="rowborder">
							@foreach($sptt as $sptt)
								<div class="col-sm-4" id='col3'>
									<p class="single-item-title">{{$sptt->name}}</p>
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsp',$sptt->id)}}"><img src="qt69admin/image/product/{{$sptt->image}}" alt="" height="243px" width="100%"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-price">
												@if($sptt -> giakm!=0)
													<span class="flash-del">{{$sptt->gia}} VND</span>
													<span class="flash-sale">{{$sptt->giakm}} VND</span>
													<div class="ribbon-wrapper"><div class="ribbon sale">SALE</div></div>
												@else
													<span class="flash-sale">{{$sptt->gia}} VND</span>
												@endif

											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html"> + Giỏ hàng <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
											<br>
											<br>
										</div>
									</div>
								
								</div> <!-- .beta-products-list -->
								@endforeach
						</div>
					</div>
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Bán chạy nhất</h3>
						@foreach($topsp as $tsp)
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitietsp',$tsp->id)}}"><img src="qt69admin/image/product/{{$tsp->image}}" alt=""></a>
									<div class="media-body">
										{{$tsp->name}}
										<span class="beta-sales-price">
											<br>
											@if($tsp -> giakm!=0)
													<span class="flash-del" style="font-size: 16px">{{$tsp->gia}} VND</span>
													<span class="flash-sale" style="font-size: 16px">{{$tsp->giakm}} VND</span>
													<div class="ribbon-wrapper"><div class="ribbon sale">HOT</div></div>
												@else
													<span class="flash-sale" style="font-size: 16px">{{$tsp->gia}} VND</span>
												@endif
										</span>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới </h3>
						<div class="widget-body">
							@foreach($sanpham as $spm)
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chitietsp',$spm->id)}}"><img src="qt69admin/image/product/{{$spm->image}}" alt=""></a>
									<div class="media-body">
										{{$spm->name}} 
										<span class="beta-sales-price">
											<br>
											@if($spm -> giakm!=0)
													<span class="flash-del" style="font-size: 16px">{{$spm->gia}} VND</span>
													<span class="flash-sale" style="font-size: 16px">{{$spm->giakm}} VND</span>
												@else
													<span class="flash-sale" style="font-size: 16px">{{$spm->gia}} VND</span>
												@endif
										</span>
									</div>
								</div>															
							</div>
							@endforeach
						</div>
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- chitietcontent -->
	</div> <!-- .container -->
@endsection
