@extends('admin.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif
                        <form action="{{$sp->id}}" method="POST">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}" /><!--  Kỹ thuật tấn công CSRF là gì? (https://freetuts.net/ky-thuat-tan-cong-csrf-va-cach-chong-csrf-106.html) -->
                            <div class="form-group">
                                <label>Tên</label>
                                <input class="form-control" name="ten" placeholder="Nhập tên sản phẩm"  value="{{$sp->name}}" />
                            </div>
                            <div class="form-group">
                                <label>ID loại</label>
                                <input class="form-control" name="idloai" placeholder="Nhập loại sản phẩm" list="cbb" value="{{$sp->idloai}}" />
                                <datalist id="cbb">
                                    @foreach($menu as $cbb)
                                    <option value="{{$cbb->id}}">
                                    <h1>{{$cbb->name}}</h1>
                                    @endforeach
                                </datalist>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="mota">NULL</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="gia" placeholder="Nhập giá" value="{{$sp->gia}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá KM</label>
                                <input class="form-control" name="giakm" placeholder="Nhập giá khuyến mãi" 
                                value="{{$sp->giakm}}" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng </label>
                                <input class="form-control" name="soluong" placeholder="Nhập số lượng" 
                                value="{{$sp->soluong}}"/>
                            </div>
                             <div class="form-group">
                                <label>Tình trạng</label>
                                <input class="form-control" name="new" placeholder="sản phẩm mới(1),sản phẩm hot(2)" value="{{$sp->new}}" />
                            </div>
                            <div class="form-group">
                                <label>image</label>
                                <input type="file" name="image" value="{{$sp->image}}">
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection