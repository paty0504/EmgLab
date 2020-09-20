@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Đăng ký tham gia Lab</h1>	
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
                        <form action="apply" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">   
                            <div class="form-group">
                                <div class="label">Họ Tên</div>
                                <input class="form-control" name="name" placeholder="" />
                            </div>
                            <div class="form-group">
                            <div class="label">Email</div>
                                <input type="email" class="form-control" name="mail" placeholder="" />
                            </div>
                            <div class="form-group">
                            <div class="label">Số điện thoại</div>
                                <input class="form-control"  name="phone" placeholder="" />
                            </div>
                            <div class="form-group">
                            <div class="label">Khoa-Viện</div>
                                <select name="school" class="form-control" id="">
                                <option value="ĐTVT">ĐTVT</option>
                                <option value="CNTT">CNTT</option>
                                <option value="Điện">Điện</option>
                                <option value="Toán Ứng dụng">Toán Ứng dụng</option>
                                </select>
                            </div>
                           
                            <div class="form-group">
                            <div class="label">Khóa</div>
                                <select name="grade" class="form-control" id="">
                                <option value="k61">k61</option>
                                <option value="k62">k62</option>
                                <option value="k63">k63</option>
                                <option value="k64">k64</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <div class="label">CV (nếu có)</div>
                            <input type="file"  name="Hinh" class="form-control"/>
                        </div>
                            <button type="submit button" class=" btn btn btn-secondary ml-1">Gửi</button>
                            
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
                            margin-left: 45%;
                            margin-top: 43px;
                            height: 32px;
                        }
                    </style>
    </div>
@endsection