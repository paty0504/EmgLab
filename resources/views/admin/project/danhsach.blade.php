      @extends('admin.layout.index')
      @section('content')
      <!-- Page Content -->
      <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Dự Án
                            <small>Danh Sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                    <div class="alert alert-success">{{session('thongbao')}}</div>
                        
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên</th>
                                
                                
                                
                                
                                <th>Hình</th>
                                <th>Nổi Bật</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($project as $p)
                            <tr class="odd gradeX" align="center">
                                <td>{{$p->id}}</td>
                                <td>{{$p->name}}</td>
                                
                                
                                
                                <td>
                                <p> <img width="100px" src="upload/project/{{$p->picture}}" alt="" /></p>
                                </td>
                                <td>
                                @if($p->highlight==0){{'Không'}}
                                @else{{'Có'}}
                                @endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/project/xoa/{{$p->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/project/sua/{{$p->id}}">Edit</a></td>
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