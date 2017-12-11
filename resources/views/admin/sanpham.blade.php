@extends('admin.index')
@section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản Phẩm
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Tên loại</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Giá KM</th>
                                <th>Số lượng</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dsh as $dsh) 
                            @if($dsh->id % 2 !=0)
                            <tr class="odd gradeX" align="center">
                                <td>{{$dsh->id}}</td>
                                <td>{{$dsh->name}}</td>
                                 <td>{{$menu[0]->name}}</td>
                                <td>{{$dsh->description}}</td>
                                <td>{{$dsh->gia}}</td>
                                <td>{{$dsh->giakm}}</td>
                                <td>{{$dsh->soluong}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @else
                            <tr class="even gradeC" align="center">
                                <td>{{$dsh->id}}</td>
                                <td>{{$dsh->name}}</td>
                                <td>{{$menu[0]->name}}</td>
                                <td>{{$dsh->description}}</td>
                                <td>{{$dsh->gia}}</td>
                                <td>{{$dsh->giakm}}</td>
                                <td>{{$dsh->soluong}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection