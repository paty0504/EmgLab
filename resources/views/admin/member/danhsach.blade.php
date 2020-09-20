@extends('admin.layout.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách thành viên
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                    <div class="alert alert-success">{{session('thongbao')}}</div>
                        
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                
                                <th>Hình</th>
                                <th>Khóa</th>
                                <th>Email</th>
                                <th>Chức vụ</th>
                                <th>Chuyên môn</th>
                                <th>Thành viên</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($member as $c)
                            <tr class="even gradeC" align="center">
                                <td>{{$c->id}}</td>
                                <td>{{$c->name}}</td>
                                
                                <td>
                                    <img width="400px" height="300px" src="upload/member/{{$c->picture}}" alt="">
                                </td>
                                <td>{{$c->grade}}</td>
                                <td>{{$c->email}}</td>
                                <td>{{$c->role}}</td>
                                <td>{{$c->job}}</td>
                                <td>{{$c->current_member}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/member/xoa/{{$c->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/member/sua/{{$c->id}}">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection