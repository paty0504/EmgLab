@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Đăng ký</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
    <div class="width-container">
    <div class="col-lg-7" style="">
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
                        <form action="dangky" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">   
                            <div class="form-group">
                                <div class="label">Họ Tên</div>
                                <input class="form-control" name="name" placeholder="" />
                            </div>
                            <div class="form-group">
                            <div class="label">Email</div>
                                <input type="email" class="form-control" name="email" placeholder="" />
                            </div>
                            <div class="form-group">
                            <div class="label">Mật khẩu</div>
                                <input type="password" class="form-control"  name="password" placeholder="" />
                            </div>
                         
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                            
                        <form>
                    </div>
                    <style>
                        form{
                            padding-top: 30px;
                            padding-left: 25px;
                        }
                        .label{
                            font-size: 20px;
                            padding: 16px 0 1px 0;
                        }
                        input{
                            height: 24px;
                            width: 50%;
                    
                        }
                        select{
                            height: 32px;
                            width: 25%;
                        }
                        .btn{
                            width: 71px;
                            margin-left: 30%;
                            margin-top: 43px;
                            height: 32px;
                        }
                    </style>
    </div>
@endsection