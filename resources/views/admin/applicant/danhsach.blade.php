@extends('admin.layout.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ứng Viên Đăng ký tham gia Lab
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 
                    <table class="table table-striped table-bordered table-hover" id="">
                        <thead>
                            <tr align="center">
                              
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số Điện thoại</th>
                                <th>Khoa-Viện</th>
                                <th>Khóa</th>
                                <th>CV</th>
                                <th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($applicant as $a)
                            <tr class="even gradeC" align="center">
                                <td>{{$a->name}}</td>
                                <td>{{$a->mail}}</td>
                                <td>{{$a->phone}}</td>
                                <td>{{$a->school}}</td>
                                <td>{{$a->grade}}</td>
                                

                                <td>
                                    <img width="400px" height="300px" src="upload/cv/{{$a->cv}}" alt="">
                                </td>
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/applicant/xoa/{{$a->id}}"> Delete</a></td>
                               
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