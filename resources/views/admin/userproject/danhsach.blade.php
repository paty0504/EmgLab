@extends('admin.layout.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Liên hệ sản phẩm
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                              
                                <th>Tên Người dùng</th>
                                <th>Email</th>
                               
                                <th>Tên Project</th>
                                <th>Lời nhắn</th>
                                
                                <th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($userproject as $up)
                            <tr class="even gradeC" align="center">
                                <td>{{$up->user->name}}</td>
                                <td>{{$up->user->email}}</td>
                                <td>{{$up->project->name}}</td>
                                <td>{{$up->comment}}</td>
                               
                                

                               
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/userproject/xoa/{{$up->id}}"> Delete</a></td>
                               
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