@extends('admin.layout.index')
    
    @section('content')
    
       <!-- Page Content -->
       <div id="page-wrapper">


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Service
                <small>{{$service->Ten}}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
        @if(count($errors)>0)
            <div class="alert alert-danger">
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
            <form action="admin/service/sua/{{$service->id}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <!-- enctype="multipart/form-data" khai bao de upload file anh -->
               
               
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="Ten" value="{{$service->name}}" placeholder="Nhập tên slide" />
                </div>
                
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea id="demo" name="NoiDung"  class="form-control ckeditor" rows="3">"{{$service->description}}"</textarea>
                </div>
               
                <div class="form-group">
                    <label >Hình Ảnh</label>
                    <p><img width="400px" src="upload/service/{{$service->picture}}" alt=""></p>
                    <input type="file" name="Hinh" class="form-control"/>
                </div>
               
                <button type="submit" class="btn btn-default">Sửa</button>
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