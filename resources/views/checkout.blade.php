@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			@if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
			<form action="{{route('order',Auth::user()->id)}}" method="post" class="beta-form-checkout"><input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" name="name" id="name" placeholder="Họ tên" required value="{{Auth::user()->name}}">
						</div>
						<div class="form-block">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input name="email" type="email" id="email" required placeholder="expample@gmail.com" value="{{Auth::user()->email}}">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" name="address" id="adress" placeholder="Street Address" required value="{{Auth::user()->address}}">
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" name="phone" id="phone" required value="{{Auth::user()->phone}}">
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" name="note"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="assets/dest/images/shoping1.jpg" alt="" class="pull-left">
											<div class="media-body">
												<i style="font-size: 0">{{$a = 0,$b = 0}}</i>
												@foreach($cart as $cart)
												<img src="qt69admin/assets/dest/images/{{$cart->img}}" alt="">
												<p class="font-large">{{$cart->name}}</p>
												<span class="color-gray your-order-info">Đơn Giá {{$cart->price}}</span>
												<span class="color-gray your-order-info">Số Lượng {{$cart->qty}}</span>
												<i style="font-size: 0">{{$a += $cart->price * $cart->qty}}</i>
												@endforeach
											</div>
										</div>
									<!-- end one item -->
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item" >
									<div ><p class="your-order-f18"> Giảm giá: </p></div>
									<div><h5 class="color-black">{{$b}}</h5></div>
									<hr>
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">{{$a-$b}}</h5></div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Nguyễn A
											<br>- Ngân hàng ACB, Chi nhánh TPHCM
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center"><button class="beta-btn primary" >Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
						</div> <!-- .your-order -->
					</div>
				</div>
				<input type="text" name="total" value="{{$a-$b}}" style="display: none">
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection