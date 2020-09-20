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
                              
                                <th>Tên </th>
                                <th>Email</th>
                               <th>Số điện thoại</th>
                                <th>Tên Product</th>
                                <th>Lời nhắn</th>
                                
                                <th>Delete</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($productcontact as $up)
                            <tr class="even gradeC" align="center">
                                <td>{{$up->name}}</td>
                                <td>{{$up->email}}</td>
                                <td>{{$up->phone}}</td>
                                <td>{{$up->product->name}}</td>
                                <td>{{$up->comment}}</td>
                               
                                

                               
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/productcontact/xoa/{{$up->id}}"> Delete</a></td>
                               
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