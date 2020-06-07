@extends('layout.index') 
  @section('content')

  <div id="page-title">
		<div class="width-container paged-title">
			<h1>Các Khóa Học</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
    <div class="width-container">
        @foreach($course as $s)
    <div class="grid3column" style="margin-top: 40px;">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a  href="detailcourse/{{$s->id}}"  class="hover-icon">
						<img  src="upload/course/{{$s->picture}}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a style=" font-size:20px; " href="detailcourse/{{$s->id}}">{{$s->name}}</a></h4>
						
					</div>
				</div><!-- close .content-container -->
			</div>
		@endforeach	
		
			
			
			
			<div class="clearfix"></div>
			
			<style>

            a.hover-icon>img{
						height:300px;
                		object-fit: contain;
              
							max-height: 100%; 
							padding-bottom: 10px;
					}
            </style>
		
			
			
			
	
		</div><!-- close .width-container -->
		</div>
    @endsection