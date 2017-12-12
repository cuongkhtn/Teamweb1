@extends('admin.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Update loại hoa
                            <small></small>
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
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                        <form action="{{$sp->id}}" method="POST" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" /><!--  Kỹ thuật tấn công CSRF là gì? (https://freetuts.net/ky-thuat-tan-cong-csrf-va-cach-chong-csrf-106.html) -->
                            <div class="form-group">
                                <label>ID loại</label>
                                <input class="form-control" name="id" list="cbb" value="{{$sp->id}}"/>
                                <datalist id="cbb">
                                    @foreach($menu as $cbb)
                                    <option value="{{$cbb->id}}">
                                    <h1>{{$cbb->name}}</h1>
                                    @endforeach
                                </datalist>
                                <br>
                                <label> Tên loại</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                            </div>
                            <button type="submit" class="btn btn-default">Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
</div>
@endsection