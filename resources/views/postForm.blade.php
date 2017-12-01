<form action="{{route('postForm')}}" method="post">
	<input type="text" name="Taikhoan">
	<input type="text" name="Matkhau">
	<input type="submit">
	 {{ csrf_field() }}
</form>