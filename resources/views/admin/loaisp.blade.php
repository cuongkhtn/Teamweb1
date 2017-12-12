@extends('admin.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                     <div class="col-lg-12" style="padding-bottom:120px">
                            @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{session('thongbao')}}
                                </div>
                             @endif        
                             @if(session('loi'))
                                <div class="alert alert-success">
                                    {{session('loi')}}
                                </div>
                             @endif                      
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menu as $ds)
                            @if($ds->id % 2 !=0)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ds->id}}</td>
                                <td>{{$ds->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('delhg',$ds->id)}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('editlhg',$ds->id)}}">Edit</a></td>
                            </tr>
                            @else
                            <tr class="even gradeC" align="center">
                                <td>{{$ds->id}}</td>
                                <td>{{$ds->name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('delhg',$ds->id)}}"> Delete</a></td>
                               <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('editlhg',$ds->id)}}">Edit</a></td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                     </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
                            
</div>
@endsection