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

					<!-- <div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="chitiettab-description">Description</a></li>
							<li><a href="chitiettab-reviews">Reviews (0)</a></li>
						</ul>

						<div class="panel" id="tab-description" >
							<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
							<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
						</div>
						<div class="panel" id="tab-reviews" >
							<p>No Reviews</p>
						</div>
					</div> -->

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
						 @if(Auth::check())
						<br>	<br>	<br>	<br>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <p style="font-size: 1.5em"> Viết bình luận ...<span class="glyphicon glyphicon-pencil" ></span></p>
                    <br>
                    <form action="../../comment/{{$chitiet->id}}" method="post" role="form">
                    	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="NoiDung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
				
				
                <hr>
				  @endif
                <!-- Posted Comments -->
                 @if(Auth::check())
					@else
					<br>
					<hr>
					<h5  class="form-control"  style="background-color: #f1f1f1;color: #202020;font-size: 14px;font-weight: bold;">Nhận xét về sản phẩm &nbsp;<small> (<a href="login">Đăng nhập để bình luận</a>)</small></h5>
					<br>
				 @endif
                <!-- Comment -->
                @foreach($chitiet->comment as $cmt)
                <div class="media" id="data">
                	@if($cmt->user->loaiuser != 1)
                    <a class="pull-left">
	                        <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MSAoMzUzMjYpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPjJFODk0REU2LUQ3MTctNEU5Qi05NTA0LTgzRTdBMjBENkVDNzwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iZGVza3RvcCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IjAuMS1RJmFtcDtBLS1MYW5kaW5nIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNzQuMDAwMDAwLCAtMjA1LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyBpZD0iR3JvdXAtNCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAuMDAwMDAwLCA4Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJxdWVzdGlvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjQuMDAwMDAwLCAxMjMuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTIiPgogICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iaWNfYWNjb3VudF9jaXJjbGUiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IlNoYXBlIiBwb2ludHM9IjAgMCAzNiAwIDM2IDM2IDAgMzYiPjwvcG9seWdvbj4KICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xOCwwIEM4LjA2NCwwIDAsOC4wNjQgMCwxOCBDMCwyNy45MzYgOC4wNjQsMzYgMTgsMzYgQzI3LjkzNiwzNiAzNiwyNy45MzYgMzYsMTggQzM2LDguMDY0IDI3LjkzNiwwIDE4LDAgTDE4LDAgWiBNMTgsNS40IEMyMC45ODgsNS40IDIzLjQsNy44MTIgMjMuNCwxMC44IEMyMy40LDEzLjc4OCAyMC45ODgsMTYuMiAxOCwxNi4yIEMxNS4wMTIsMTYuMiAxMi42LDEzLjc4OCAxMi42LDEwLjggQzEyLjYsNy44MTIgMTUuMDEyLDUuNCAxOCw1LjQgTDE4LDUuNCBaIE0xOCwzMC45NiBDMTMuNSwzMC45NiA5LjUyMiwyOC42NTYgNy4yLDI1LjE2NCBDNy4yNTQsMjEuNTgyIDE0LjQsMTkuNjIgMTgsMTkuNjIgQzIxLjU4MiwxOS42MiAyOC43NDYsMjEuNTgyIDI4LjgsMjUuMTY0IEMyNi40NzgsMjguNjU2IDIyLjUsMzAuOTYgMTgsMzAuOTYgTDE4LDMwLjk2IFoiIGlkPSJTaGFwZSIgZmlsbD0iIzgwODA4MCI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4K" alt="" >
	                    </a>
                    	@else
                    	<a class="pull-left" href="#">
	                        <img class="media-object" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMzZweCIgaGVpZ2h0PSIzNnB4IiB2aWV3Qm94PSIwIDAgMzYgMzYiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgICA8IS0tIEdlbmVyYXRvcjogc2tldGNodG9vbCA0MSAoMzUzMjYpIC0gaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoIC0tPgogICAgPHRpdGxlPjgyNjVFQjJBLTkzNEItNDM0QS04NEM2LUQ3MzM3MTYwMzczNjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggc2tldGNodG9vbC48L2Rlc2M+CiAgICA8ZGVmcz48L2RlZnM+CiAgICA8ZyBpZD0iZGVza3RvcCIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICAgICAgPGcgaWQ9IjAuMS1RJmFtcDtBLS1MYW5kaW5nIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNzQuMDAwMDAwLCAtMjY1LjAwMDAwMCkiPgogICAgICAgICAgICA8ZyBpZD0iR3JvdXAtNCIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoNTAuMDAwMDAwLCA4Mi4wMDAwMDApIj4KICAgICAgICAgICAgICAgIDxnIGlkPSJxdWVzdGlvbiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjQuMDAwMDAwLCAxMjMuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImFuc3dlciIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMC4wMDAwMDAsIDYwLjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0ic2VsbGVyLWljb24iPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgPGVsbGlwc2UgaWQ9Ik92YWwtMiIgZmlsbD0iIzFBOUNCNyIgY3g9IjE4IiBjeT0iMTgiIHJ4PSIxOCIgcnk9IjE4Ij48L2VsbGlwc2U+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iaWNfc3RvcmVfbWFsbF9kaXJlY3RvcnkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDQuNTAwMDAwLCA0LjUwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxnIGlkPSJJY29uLTI0cHgiPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cG9seWdvbiBpZD0iU2hhcGUiIHBvaW50cz0iMCAwIDI3IDAgMjcgMjcgMCAyNyI+PC9wb2x5Z29uPgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNMjIuNSw0LjUgTDQuNSw0LjUgTDQuNSw2Ljc1IEwyMi41LDYuNzUgTDIyLjUsNC41IEwyMi41LDQuNSBaIE0yMy42MjUsMTUuNzUgTDIzLjYyNSwxMy41IEwyMi41LDcuODc1IEw0LjUsNy44NzUgTDMuMzc1LDEzLjUgTDMuMzc1LDE1Ljc1IEw0LjUsMTUuNzUgTDQuNSwyMi41IEwxNS43NSwyMi41IEwxNS43NSwxNS43NSBMMjAuMjUsMTUuNzUgTDIwLjI1LDIyLjUgTDIyLjUsMjIuNSBMMjIuNSwxNS43NSBMMjMuNjI1LDE1Ljc1IEwyMy42MjUsMTUuNzUgWiBNMTMuNSwyMC4yNSBMNi43NSwyMC4yNSBMNi43NSwxNS43NSBMMTMuNSwxNS43NSBMMTMuNSwyMC4yNSBMMTMuNSwyMC4yNSBaIiBpZD0iU2hhcGUiIGZpbGw9IiNGRkZGRkYiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICAgICAgICAgIDwvZz4KICAgICAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgICAgICA8L2c+CiAgICAgICAgICAgIDwvZz4KICAgICAgICA8L2c+CiAgICA8L2c+Cjwvc3ZnPgo=" alt="" >
	                    </a>
                    @endif
                    <div class="media-body" style="margin-top: -17px" >
                        <p  class="single-item-title"   id="{{$cmt->id}}" >{{$cmt->user->name}}
                            <small>{{$cmt->created_at}}</small>
                        </p>
                        <p style="font-weight:500">{{$cmt->NoiDung}}</p>
                        <hr>
                    </div>
                </div>
				@endforeach
                <!-- Comment -->
              
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
	 <!-- 	<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="900" data-numposts="5"></div> -->
		<br><br>
	</div> <!-- .container -->
	
@endsection
