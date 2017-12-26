@extends('master')
@section('content')

	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row" >
					<div class="col-sm-3" >

						<ul class="aside-menu">
							@foreach($menu as $nsp)
							<li><a href="{{route('san-pham',$nsp->id)}}">{{$nsp->name}}</a></li>
							@endforeach
						</ul>
						<br>
						<br>
						<form action="search1" method="GET">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<h3 class="header" style="background-color: #0277b8;;border-radius: 4px;color: white;font-size: 17px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tư vấn chọn hoa</h3>
						<div class="body" style="border: solid 1px #0277b8;padding:10px;">
							<span class="filter-title" style="font-size: 12px;font-weight:bold;">Chủ đề</span>
							<div class="filter-criteria" style="padding:5px,3px;">
							
							 <input class="form-control" name="input1" />
 
							</div>
							<span class="filter-title"  style="font-size: 12px;font-weight:bold;margin-bottom:5px">Mức giá</span>
							<div class="filter-criteria"  style="padding:5px,3px;height: 28px">
								<input class="form-control" name="input2" placeholder="Giá Thấp nhất"  />
							</div>
							&nbsp;
							<div class="filter-criteria"  style="padding:5px,3px;height: 28px">
								<input class="form-control" name="input3" placeholder="Giá cao nhất" />
							</div>
							<span class="description"><br>* Bạn có thể gọi nhanh cho chúng tôi theo số 0165 723 53 65 để đặt hoa theo thiết kế riêng</span>
							<div class="button-bar text-center">
							<input type="submit" class="btn btn-primary" value="Gửi">
							</div>
							</div>
						</div>
						</form>
					<div class="col-sm-9" id='col3'>
						<div class="beta-products-list" >
							<h4>Tìm Kiếm</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($search1)}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>
							<div id="rowborder">
							@foreach($search as $tsp)
							<div class="col-sm-4" id='col3'>
								<p class="single-item-title">{{$tsp->name}}</p>
								<div class="single-item">
									<div class="single-item-header">
										<a href="{{route('chitietsp',$tsp->id)}}"><img src="qt69admin/image/product/{{$tsp->image}}" alt="cường đẹp trai =)))"  height="243px" width="100%"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-price" style="font-size: 19px">
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
							<div class="space40">&nbsp;</div>	
						</div>
						</div> <!-- .beta-products-list -->
						<div class="col-sm-3"></div>
						<div class="col-sm-9"><div> {{ $search->links() }}</div></div>
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection