@extends('master')
@section('content')
<br>
<h3 style="margin-left: 340px">Cài đặt tài khoản</h3><hr>
	@if(count($errors)>0)
         <div class="alert alert-danger" style="padding-left: 350px">
            @foreach($errors->all() as $err)
               {{$err}}<br>
            @endforeach
          </div>
    @endif
    @if(session('thongbao'))
		<div class="alert alert-success" style="padding-left: 350px">
			{{session('thongbao')}}
		</div>
    @endif
<div class="row" style="margin-top: 50px;margin-bottom: 70px">
<div class="col-sm-3">
	<div class="row" >
		<div class="col-sm-3" ></div>
		<div class="col-sm-8" style="border: 1px solid  #bfbfbf;border-radius: 10px;padding:25px 30px 30px 30px;box-shadow: 2px 0px 3px  #bfbfbf">
			<div class="gavatar-box clearfix" style="border-bottom: 1px dotted #dfdfdf;">
				<img alt="" src="https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=70&amp;r=g" data-lazy-src="https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=70&amp;r=g" data-lazy-srcset="https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=140&amp;r=g 2x" class="avatar avatar-70 photo img-circle     lazyloaded" height="70" width="70" srcset="https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=140&amp;r=g 2x" style="float: left;"><noscript>&lt;img alt='' src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs=" data-lazy-src='https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=70&amp;#038;r=g' data-lazy-srcset='https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=140&amp;#038;r=g 2x' class='avatar avatar-70 photo img-circle' height='70' width='70' /&gt;&lt;noscript&gt;&lt;img alt='' src='https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=70&amp;#038;r=g' srcset='https://secure.gravatar.com/avatar/70034fb0e6701f852d856c1d2cf1059c?s=140&amp;#038;r=g 2x' class='avatar avatar-70 photo img-circle' height='70' width='70' /&gt;</noscript>				<div class="meta">
					<h3>Quốc Cường</h3>
					<a href="Logoutindex" title="Logout">Logout</a>	
								</div><br>
			</div><br>

			<ul>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard">

						<a href="#">Bảng điều khiển</a>
					</li>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">

						<a href="#">Đơn hàng</a>
					</li>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">

						<a href="#">Tải xuống</a>
					</li>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">

						<a href="#">Địa chỉ</a>
					</li>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account is-active">

						<a href="#">Thông tin tài khoản</a>
					</li>
														<li class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">

						<a href="Logoutindex">Đăng xuất</a>
					</li>
							</ul>
				</div>
				<div class="col-sm-3" ></div>
		</div>
</div>
<div class="col-sm-6">
<form class="" action="" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<p class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
		<label for="name">Tên <span class="required">*</span></label>
		<input style="border-radius: 5px;" type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="name" value="{{Auth::user()->name}}" />
	</p>
	<br>
	<div class="clear"></div>

	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="address">Địa chỉ <span class="required">*</span></label>
		<input  style="border-radius: 5px;"  type="text"class="woocommerce-Input woocommerce-Input--email input-text" name="address" id="address" value="{{Auth::user()->address}}" />
	</p>
	<br>	
	<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
		<label for="phone">Điện thoại <span class="required">*</span></label>
		<input style="border-radius: 5px;"  type="text" class="woocommerce-Input woocommerce-Input--email input-text" name="phone" id="phone" value="{{Auth::user()->phone}}" />
	</p>
		<br>
	<fieldset>
		<h4>Thay đổi mật khẩu</h4>
		<br>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="oldpass">Mật khẩu hiện tại (bỏ trống nếu không đổi)</label>
			<input   style="border-radius: 5px;" type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="oldpass" id="oldpass" />
		</p>
		<br>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_1">Mật khẩu mới (bỏ trống nếu không đổi)</label>
			<input   style="border-radius: 5px;" type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_1" id="password_1" />
		</p><br>
		<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="password_2">Xác nhận mật khẩu mới</label>
			<input  style="border-radius: 5px;" type="password" class="woocommerce-Input woocommerce-Input--password input-text" name="password_2" id="password_2" />
		</p>
	</fieldset>
	<div class="clear"></div>

		<br>
	<p>
		<input type="hidden" id="_wpnonce" name="_wpnonce" value="fbb3f4846e" /><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/" />		
		<input  style="border-radius: 5px;background-color: #0277b8; color: white;font-weight: 400;border: 1px solid transparent;width: 103px;height: 30px"  type="submit" class="woocommerce-Button button" name="save_account_details" value="Lưu thay đổi" />
		<input  style="border-radius: 5px;" type="hidden" name="action" value="save_account_details" />
	</p>

	</form>
	</div>
	<div class="col-sm-3"></div>
</div>
@endsection