@extends('layout.index') 
  @section('content')
  

	
	<div id="page-title" style=" margin-top: 75px">
			<div class="flexslider" id="homepage-slider">
				<ul class="slides">
					<li>
						<div class="caption-progression">
							<div class="width-container">
								<!-- Unique &amp; modern restaurant<br>in the heart of your town. -->
							</div>
						</div><!-- close .caption-progression -->
						<img style="    margin: auto; " src="images/demo/emglab.jpg" style="height: 800px; object-fit: cover;
" alt="slide">
					</li>
				
				</ul>
			</div><!-- close .flexslider -->
			<div id="page-title-divider"></div>
	</div><!-- #page-title -->
	<div class="clearfix"></div>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
	    $('#homepage-slider').flexslider({
			animation: "fade",              //String: Select your animation type, "fade" or "slide"
			slideshow: false,                //Boolean: Animate slider automatically
			slideshowSpeed: 8000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationDuration: 500,         //Integer: Set the speed of animations, in milliseconds
			directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
			controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
			mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
			prevText: "Previous",           //String: Set the text for the "previous" directionNav item
			nextText: "Next",               //String: Set the text for the "next" directionNav item
			pausePlay: false,               //Boolean: Create pause/play dynamic element
			pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
			playText: 'Play',               //String: Set the text for the "play" pausePlay item
			randomize: false,               //Boolean: Randomize slide order
			slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
			useCSS: true,
			animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	    });
	});
	</script>
	
	
	<div id="main">
		<!-- <div class="width-container">
		
		<ul style="float: right;  display: flex; list-style:none">
			@if(Auth::check()) 
					<li style="padding-right: 5px;" class="active"><a href="nguoidung"> {{Auth::user()->name}}  </a></li> | 
					<li style="padding-left: 5px;" class="active"><a href="dangxuat">Đăng xuất   </a></li> 
					@else
					<li  style="padding-right: 5px;"><a href="dangnhap">Đăng nhập</a></li> |
					<li style="padding-left: 5px;"><a href="dangky">Đăng ký</a></li>
					@endif
		</ul> 
		<div class="clearfix"></div>
		</div>  -->
        <div class="width-container">
		
        <div class="title">Giới thiệu</div> <hr>
        <p>EMGlabvn là nhóm nghiên cứu trẻ chuyên ngành, thuộc Bộ môn Công Nghệ điện tử & Kỹ thuật Y sinh, viện Điện tử - Viễn thông, trường đại học Bách Khoa Hà Nội. Lab được thành lập bởi TS. Phạm Mạnh Hùng từ năm 2012, phát triển từ một nhánh của nhóm nghiên cứu BKFET hay . Tên gọi của EMGlabvn được lấy theo tên đối tượng nghiên cứu của luận án tiến sỹ của TS. Phạm Mạnh Hùng, là tín hiệu điện cơ đồ (Electromyography - EMG).</p>
        <p>Nhiệm vụ chính của Lab là thực hiện các đề tài/nhiệm vụ khoa học được Bộ môn - Trung tâm giao, các dự án do các thành viên đề xuất hoặc các dự án nghiên cứu do các đối tác nghiên cứu phối hợp triển khai. Thông qua việc thực hiện các đề tài, nhiệm vụ và dự án nghiên cứu, Lab đã đào tạo được các kỹ sư có năng lực nghiên cứu tốt, thực vậy trên 90% sinh viên của EMGlabvn tốt nghiệp đang làm việc tại các đơn vị nghiên cứu và phát triển công nghệ như Viettel, FPT, Samsung...</p>
        
        <p>Hiên nay, chúng tôi đang triển khai một số dự án liên quan đến việc áp dụng các thành tựu công nghệ của cuộc Cách mạng công nghiệp 4.0 vào trong giao dục và Y tế. Do đo, bên cạnh thế mạnh là tạo ra các thiết bị điện tử thiên vê "phần cứng", chúng tôi còn phát triển các phần mềm chạy trên máy tính, các ứng dụng di động chạy trên hệ điều hành Android, iOS và các website. Các hệ thống này cho phép thực hiện các tác vụ giữa người với máy và ngược lại, hoặc máy với người một cách thuận lợi và nhanh chóng.</p>
        <p>Với EMGlabvn, bên cạnh việc xây dựng mối quan hệ công việc chúng tôi còn xây dựng tình bạn lâu dài. Chúng tôi rất hào hứng, tích cực và sẵn sàng phối hợp thực hiện các dự án nghiên cứu từ các đối tác quan tâm. Lab luôn sẵn sàng đón nhận các sinh viên nhiệt tình, đam mê khoa học.</p>
        </div>
        
		<div  class="width-container project-container">
        
        <div class="title">Một số dự án tiêu biểu</div> <hr>
        <?php
                        $data = $project->where('highlight',1)->take(3);
                        
         ?>
         @foreach($data->all() as $p)
			<div class="grid3column project" style="">
				<h3>{{$p['name']}}</h3>
				<img height="200px" src="upload/project/{{$p['picture']}}" alt="slide" class="aligncenter">
				
				<p><a href="detailproject/{{$p['id']}}" class="rock-button">Chi tiết</a></p>
			</div>
		
            @endforeach


			<div class="clearfix"></div>
		<style>
                 @media screen and (min-width: 700px) {
            .project {
                width: 30% !important;
                     }
                    }
            .project-container{
                margin-top: 70px;
            }
            p{
                font-size: 19px;
            }
            .project>h3{
                height: 44px;
            }
            .project>img{
                height: 200px;
                object-fit: contain;
              
                max-height: 100%; 
            }
            .title{
              font-size: 30px;
              font-family: Droid serif;
              margin-bottom: 10px;  
            }
        </style>	
		<div class="clearfix"></div>
		</div><!-- close .width-container -->

		

		<div class="clearfix"></div>
	</div><!-- close #main -->
@endsection