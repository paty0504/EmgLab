@extends('layout.index') 
  @section('content')

  <div id="page-title">
		<div class="width-container paged-title">
			<h1>Cựu thành viên lab</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
    <div id="main">
		<div class="width-container">
			@foreach($member as $m)
			<div class="media">
                <img class="align-self-center mr-3 col-md-3 mb-2 pb-1" src="upload/member/{{$m->picture}}" alt="Generic placeholder image">
                <div class="media-body align-self-center">
                    <h1 class="mt-2 mb-2">{{$m->name}}</h1>
                    <h3 class="mb-1">Đơn vị công tác: {{$m->role}}</h3>
                    <h3 class="mb-1">Chuyên môn: {{$m->job}}</h3>
                    <h3 class="mb-1">Khóa: {{$m->grade}}</h3>
                    <h3 class="mb-1">Email: {{$m->email}}</h3>
                    @if($m->id == 1)
                    <h3 class="mb-1">Website: <a target="_blank" href="http://hungpm.simplesite.com">http://hungpm.simplesite.com</a>  </h3>
                    @endif
                </div>
                </div>
                            
			@endforeach
			
		<style>
            img{width: 100%, 
                object-fit: contain;
                max-height: 280px;
            }
        </style>
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
		<div class="widget-area-highlight">
	
		<div class="clearfix"></div>
	
	
    @endsection