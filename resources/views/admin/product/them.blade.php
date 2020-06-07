   @extends('admin.layout.index') 
   @section('content')
    <!-- Page Content -->
     <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm Sản phẩm Mới
                            
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>;
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif
                        <form action="admin/product/them" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}} "/>
                         
                         
                            <div class="form-group">
                                <label>Tên Dự Án</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên " />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="demo" name="MoTa" class="form-control ckeditor" rows="3"></textarea>
                            </div>
                           
                            <div class="form-group">
                                <label >Hình Ảnh</label>
                                <input type="file" name="Hinh" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label>Nổi Bật</label>
                                <label class="radio-inline">
                                    <input name="NoiBat" value="0" checked="" type="radio">Không
                                </label>
                                <label class="radio-inline">
                                    <input name="NoiBat" value="1" type="radio">Có
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
@section('script')
<script>
            $(document).ready(function(){
               $("#GioiTinh").change(function(){
                    var idGioiTinh = $(this).val();
                    $.get("admin/ajax/loaisanpham/"+idGioiTinh, function(data){
                        
                           $("#LoaiSanPham").html(data); 
                    });
                    // tao trang ajax
               });
            });
        </script>
        <!-- tao trang ajax de hien thi cac LoaiTin trong TheLoai da chon -->
@endsection