@extends('layout.index') 
  @section('content')

  <div id="page-title">
		<div class="width-container paged-title">
			<h1>Các Dịch Vụ</h1>	
		</div>
		<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
    <div class="width-container">
        @foreach($service as $s)
    <div class="grid3column" style="margin-top: 40px;">
				<div class="portfolio-content-container aligncenter">
					<div class="item-portfolio-image">
						<a  href="detailservice/{{$s->id}}"  class="hover-icon">
						<img  src="upload/service/{{$s->picture}}" alt="portfolio-image" /></a>			
					</div>
					<div class="portfolio-post-background">
						<h4><a style=" font-size:20px; " href="detailservice/{{$s->id}}">{{$s->name}}</a></h4>
						
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