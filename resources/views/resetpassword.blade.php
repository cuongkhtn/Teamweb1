@extends('master')
@section('content')
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('resetpassword')}}" method="post" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6" style="margin-left: 115px">
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
						<h4>Quên Mật khẩu</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email" style="line-height: 50px;font-size: 15px">Địa chỉ Email</label>
							<div style="width: 107%"><input type="email" id="email" name="email" required></div>
						</div>
						<br>
						<div class="form-block">
							<button type="submit" class="btn btn-primary" style="width:64.3%">Tiếp tục</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection