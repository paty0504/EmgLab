@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Thông Tin Dịch Vụ</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

    <div class="width-container">
			
			<div id="container-sidebar"><!-- sidebar content container -->
			
				<div class="type-post">
					<div class="blog-post-image">
						<div rel="prettyPhoto"><img src="upload/service/{{$service->picture}}" class="aligncenter" alt="blog-image"></div>
					</div>
					<div class="blog-post-background">
						<h2 class="post-title">{{$service->name}}</h2>
						<div class="post-details-meta">Thời gian October 17, 2012</div>
						<div class="blog-post-excerpt">
							<p>{!! $service->description !!}</p>
							
						</div>
						
					</div><!-- close .blog-post-background -->
					
				<div class="clearfix"></div>
				</div><!-- close .type-post -->
            	<style>
					
					.blog-post-image>div>img{
						
						height:300px;
                		object-fit: contain;
              
							max-height: 100%; 
							padding-bottom: 10px;
					}
				</style>
			
			<div class="clearfix"></div>
			</div><!-- close .content-container-spacing -->
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
@endsection