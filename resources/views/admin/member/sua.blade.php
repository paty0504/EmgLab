@extends('admin.layout.index')
    
    @section('content')
    
       <!-- Page Content -->
       <div id="page-wrapper">


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Member
                <small>{{$member->name}}</small>
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
            <form action="admin/member/sua/{{$member->id}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <!-- enctype="multipart/form-data" khai bao de upload file anh -->
               
               
                <div class="form-group">
                    <label>Tên</label>
                    <input class="form-control" name="name" value="{{$member->name}}" placeholder="Nhập tên " />
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" value="{{$member->email}}" name="email"  />
                </div>
                <div class="form-group">
                    <label>Chức vụ</label>
                    <input class="form-control" value="{{$member->role}}" name="role"  />
                </div>
                <div class="form-group">
                    <label>Chuyên môn</label>
                    <input class="form-control" value="{{$member->job}}" name="job"  />
                </div>
                <div class="form-group">
                    <label>Khóa</label>
                    <input class="form-control" value="{{$member->grade}}" name="grade"  />
                </div>
                
                <div class="form-group">
                                <label>Thành viên</label>
                                <label class="radio-inline">
                                    <input name="quyen"
                                    @if($user->current_member==1){{"checked"}} @endif
                                     value="1"  type="radio">Hiện tại
                                </label>
                                <label class="radio-inline">
                                    <input name="quyen" value="0"  type="radio"
                                    @if($user->current_member==0){{"checked"}} @endif
                                    >Cũ
                                </label>
                            </div>
                
                <div class="form-group">
                    <label >Hình Ảnh</label>
                    <p><img width="400px" src="upload/member/{{$member->Hinh}}" alt=""></p>
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