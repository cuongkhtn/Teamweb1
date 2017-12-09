@extends('master')
@section('content')

	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($name_all as $nsp)
							<li><a href="#">{{$nsp->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list" >
							<h4>{{$namesp->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($trangsp1)}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>
							<div id="rowborder">
							@foreach($trangsp as $tsp)
							<div class="col-sm-4" id='col3'>
								<p class="single-item-title">{{$tsp->name}}</p>
								<div class="single-item">
									<div class="single-item-header">
										<a href="chitiet"><img src="qt69admin/image/product/{{$tsp->image}}" alt="cường đẹp trai =)))"  height="243px" width="100%"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-price">
											@if($tsp -> giakm!=0)
													<span class="flash-del">{{$tsp->gia}} VND</span>
													<span class="flash-sale">{{$tsp->giakm}} VND</span>
													<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
												@else
													<span class="flash-sale">{{$tsp->gia}} VND</span>
												@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.html">+Giỏ hàng <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
										<br>
										<br>
									</div>
								</div>
							</div>
							@endforeach
							</div>
							<div>{{$trangsp->links()}}</div>
							<div class="space40">&nbsp;</div>		
						</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection