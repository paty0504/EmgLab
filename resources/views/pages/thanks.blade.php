@extends('layout.index')
@section('content')

<div id="page-title">
		<div class="width-container paged-title">
		
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
  <div  style="padding-bottom: 80px;" class="width-container detail">
      <p class="paragraph">Cảm ơn bạn đã liên hệ, chúng tôi sẽ gửi thông báo sớm nhất tới bạn qua email {{Auth::user()->email}}</p>
      

  </div>
  <style>
      .paragraph{
          font-size: 20px;
      }
      .detail{
          padding-top: 20px
      }
      button{
          float: right;
          margin-top: 20px;
        width: 100px;
        height: 40px;
        font-size: 17px
        
      }
  </style>
@endsection