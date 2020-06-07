@extends('layout.index') 
  @section('content')

  <div id="page-title">
		<div class="width-container paged-title">
			<h1>Các Dự Án</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

  <div class="width-container">
			
			<div id="container-sidebar"><!-- sidebar content container -->
				@foreach($project as $p)
				<div class="type-post1">
					<div class="blog-post-image">
						<a href="detailproject/{{$p->id}}"><img src="upload/project/{{$p->picture}}" class="aligncenter " alt="blog-image"></a>
					</div>
					<div class="blog-post-background">
						<h2 class="post-title"><a href="detailproject/{{$p->id}}">{{$p->name}} </a></h2>
						<div class="post-details-meta">Thời gian <a href="#">October 17, 2012</a> </div>
						<!-- <div class="blog-post-excerpt">
							<p class="ellipsis">{!! $p->description !!}</p>
						</div> -->
						<p><a href="detailproject/{{$p->id}}" class="rock-button">Chi Tiết</a></p>
					</div><!-- close .blog-post-background -->
					
				<div class="clearfix"></div>
				</div><!-- close .type-post -->
				@endforeach
				
				<style>
					
					.blog-post-image>a>img{
						
						height:300px;
                		object-fit: contain;
              
							max-height: 100%; 
							padding-bottom: 10px;
					}
				</style>
		
				
				
				
				
				
				
				<div class='pagination'><a href='' class='selected'>1</a></div>
				
				
			
			<div class="clearfix"></div>
			</div><!-- close .content-container-spacing -->
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
    @endsection