@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Liên hệ {{$project->name}}</h1>
            <h3></h3>	
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
                        <form action="lienhe/{{$project->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">   
                        @if(Auth::check()) 
					 <div class="form-group">
                            <div class="label">Nhập lời nhắn của bạn</div>
                                <input class="form-control"  name="comment" placeholder="" />
                            </div>
                            <button type="submit" class="btn btn-default">Gửi</button>
                            
                        <form>
					@else
                    <p style="font-size: 19px;">Bạn cần đăng nhập để thực hiện chức năng này</p>
					<a class="rock-button" href="dangnhap">Đăng nhập</a>
					
					@endif
                       
                    </div>
                    <style>
                        form{
                            padding-top: 30px;
                            padding-left: 25px;
                        }
                        .label{
                            font-size: 20px;
                            padding: 16px 0 10px 0;
                        }
                        input{
                            height: 70px;
                            width: 50%;
                    
                        }
                        select{
                            height: 32px;
                            width: 25%;
                        }
                        .btn{
                            width: 90px;
                            margin-left: 511px;
                            margin-top: 43px;
                            height: 32px;
                        }
                    </style>
    </div>
@endsection