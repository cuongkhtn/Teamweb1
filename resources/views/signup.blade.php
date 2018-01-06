@extends('master')
@section('content')
	<div class="container">
		<div id="content">
			
			<form action="{{route('signup_idp')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />

				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						@if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                      
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" value="{{ old('email') }}" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Fullname*</label>
							<input type="text" id="your_last_name" name="name" value="{{ old('name') }}" required>
						</div>

						<div class="form-block">
							<label for="adress">Address*</label>
							<input type="text" id="adress"  name="address" value="Street Address" value="{{ old('address') }}" required>
						</div>


						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" id="phone" name="phone" value="{{ old('phone') }}" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" required>
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" name="re_password" required>
						</div>
						<div class="form-block" style="border-bottom:1px solid #bfbfbf;height: 120px">
						<label for="phone" style="line-height: 90px;font-weight:bold;">Xác nhận* </label>
						<div class="from-group" >{!! Recaptcha::render() !!}</div>
						</div>
						<div class="form-block">
							<button type="submit" id ="submit" class="btn btn-primary" style="width: 550px">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>

		</div> <!-- #content -->

	</div> <!-- .container -->
	@endsection