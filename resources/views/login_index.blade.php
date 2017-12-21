@extends('master')
@section('content')
	
	<div class="container">
		<div id="content">
			
			<form action="login" method="post" class="beta-form-checkout">
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
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" id="email" name="email" required>
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="Password" id="phone" name="password"required>
						</div>
						<div class="from-group">{!! Recaptcha::render() !!}</div>
						<br>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection