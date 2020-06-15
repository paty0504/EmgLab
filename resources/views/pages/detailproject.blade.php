@extends('layout.index')
@section('content')
<div id="page-title">
		<div class="width-container paged-title">
			<h1>Thông Tin Dự Án</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>

    <div class="width-container">
			
			<div id="container-sidebar"><!-- sidebar content container -->
			
				<div class="type-post">
					<div class="blog-post-image">
						<div href="" rel="prettyPhoto"><img src="upload/project/{{$project->picture}}" class="aligncenter" alt="blog-image"></div>
					</div>
					<div class="blog-post-background">
						<h2 class="post-title">{{$project->name}}</h2>
						<div class="post-details-meta">Thời gian October 17, 2012</div>
						<div class="blog-post-excerpt">
							<p>{!! $project->description !!}</p>
							
						</div>
						<a class="rock-button" href="lienhe/{{$project->id}}">Liên hệ</a>
					</div><!-- close .blog-post-background -->
					<style>
					
					.blog-post-image>div>img{
						
						height:300px;
                		object-fit: contain;
              
							max-height: 100%; 
							padding-bottom: 10px;
					}
				</style>
				<div class="clearfix"></div>
				</div><!-- close .type-post -->

			
			<div class="clearfix"></div>
			</div><!-- close .content-container-spacing -->
			
			
			
		<div class="clearfix"></div>
		</div><!-- close .width-container -->
		
@endsection