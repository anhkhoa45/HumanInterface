@extends('HI_03.layouts.master')

@section('content')
	<main>
		<div class="container margin_120_95" style="padding-top: 80px">
			<div class="main_title">
				<h3>Đặt lịch khám online!</h3>
				<!-- <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p> -->
			</div>
			<div class="row add_bottom_30">
				<div class="col-lg-4">
					<div class="box_feat" id="icon_1">
						<span></span>
						<h3>Chọn lịch khám</h3>
						<p>Chọn ngày giờ, lịch khám bạn mong muốn.</p>
						<br>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>Xem hồ sơ</h3>
						<p>Xem thông tin về bệnh viện, bác sĩ phù hợp với lịch của mình.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Chọn bác sĩ</h3>
						<p>Chọn bác sĩ phù hợp với mình để đặt lịch khám bệnh</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<!-- <p class="text-center"><a href="{{ url('grid-list') }}" class="btn_1 medium">Find Doctor</a></p> -->
			<div class="row justify-content-center">
				<div class="col-xl-3">
					<p class="text-center"><a href="{{ url('grid-list') }}" class="btn_1 medium" style="font-size: 1.2125rem"><strong>Khám theo bác sĩ</strong></a></p>
				</div>
				<div class="col-xl-3">
					<p class="text-center"><a href="{{ url('schedule') }}" class="btn_1 medium" style="font-size: 1.2125rem"><strong>Khám theo ngày</strong></a></p>
				</div>
			</div>
		</div>
		<!-- /container -->
		
		<div class="container margin_120_95">
			<div class="main_title">
				<h2>Tìm theo chuyên khoa</h2>
				<!-- <p>Nec graeci sadipscing disputationi ne, mea ea nonumes percipitur. Nonumy ponderum oporteat cu mel, pro movet cetero at.</p> -->
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<a href="{{ url('grid-list') }}" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="{{ asset('HI_03/img/icon_cat_2.svg') }}" width="60" height="60" alt="">
						<h3>Khoa tim mạch</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Bác sĩ</li>
							<li><strong>60</strong>Bệnh viện</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="{{ url('grid-list') }}" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="{{ asset('HI_03/img/icon_cat_5.svg') }}" width="60" height="60" alt="">
						<h3>Nha khoa</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Bác sĩ</li>
							<li><strong>60</strong>Bệnh viện</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="{{ url('grid-list') }}" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="{{ asset('HI_03/img/icon_cat_6.svg') }}" width="60" height="60" alt="">
						<h3>Khoa X-quang</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Bác sĩ</li>
							<li><strong>60</strong>Bệnh viện</li>
						</ul>
					</a>
				</div>
				<div class="col-lg-3 col-md-6">
					<a href="{{ url('grid-list') }}" class="box_cat_home">
						<i class="icon-info-4"></i>
						<img src="{{ asset('HI_03/img/icon_cat_8.svg') }}" width="60" height="60" alt="">
						<h3>Khoa tâm lý</h3>
						<ul class="clearfix">
							<li><strong>124</strong>Bác sĩ</li>
							<li><strong>60</strong>Bệnh viện</li>
						</ul>
					</a>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
		
		<!-- <div class="container margin_120_95">
			<div class="main_title">
				<h2>Most Viewed doctors</h2>
				<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">
						<div class="views"><i class="icon-eye-7"></i>140</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">
						<div class="views"><i class="icon-eye-7"></i>120</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">
						<div class="views"><i class="icon-eye-7"></i>115</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">
						<div class="views"><i class="icon-eye-7"></i>98</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a href="{{ route('doctor.detail', ['appointment_type' => 'doctor']) }}">
						<div class="views"><i class="icon-eye-7"></i>98</div>
						<div class="title">
							<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
						</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
					</a>
				</div>
			</div>
			/carousel
		</div> -->
		<!-- /container -->

		<!-- <div id="app_section">
			<div class="container">
				<div class="row justify-content-around">
					<div class="col-md-5">
						<p><img src="{{ asset('HI_03/img/app_img.svg') }}" alt="" class="img-fluid" width="500" height="433"></p>
					</div>
					<div class="col-md-6">
						<small>Application</small>
						<h3>Download <strong>Findoctor App</strong> Now!</h3>
						<p class="lead">Tota omittantur necessitatibus mei ei. Quo paulo perfecto eu, errem percipit ponderum no eos. Has eu mazim sensibus. Ad nonumes dissentiunt qui, ei menandri electram eos. Nam iisque consequuntur cu.</p>
						<div class="app_buttons wow" data-wow-offset="100">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 43.1 85.9" style="enable-background:new 0 0 43.1 85.9;" xml:space="preserve">
							<path stroke-linecap="round" stroke-linejoin="round" class="st0 draw-arrow" d="M11.3,2.5c-5.8,5-8.7,12.7-9,20.3s2,15.1,5.3,22c6.7,14,18,25.8,31.7,33.1" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-1" d="M40.6,78.1C39,71.3,37.2,64.6,35.2,58" />
							<path stroke-linecap="round" stroke-linejoin="round" class="draw-arrow tail-2" d="M39.8,78.5c-7.2,1.7-14.3,3.3-21.5,4.9" />
						</svg>
							<a href="#0" class="fadeIn"><img src="{{ asset('HI_03/img/apple_app.png') }}" alt="" width="150" height="50" data-retina="true"></a>
							<a href="#0" class="fadeIn"><img src="{{ asset('HI_03/img/google_play_app.png') }}" alt="" width="150" height="50" data-retina="true"></a>
						</div>
					</div>
				</div>
				/row
			</div>
			/container
		</div> -->
		<!-- /app_section -->
	</main>
@endsection

@section('SPECIFIC SCRIPTS')
	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('HI_02/js/jquery.clickout.js') }}"></script>
	<script src="{{ asset('HI_03/js/video_header.js') }}"></script>
	<script>
		'use strict';
		HeaderVideo.init({
			container: $('.header-video'),
			header: $('.header-video--media'),
			videoTrigger: $("#video-trigger"),
			autoPlayVideo: true
		});

		$(document).ready(function(){
            let searchInp = document.getElementById("searchInp");
            let searchBtn = document.getElementById("searchBtn");

            $('.tutorial-icon.open').tutorial([
                {
                    element: searchInp,
                    suggestion: 'Nhập triệu chứng, tên bác sĩ hoặc tên phòng khám mong muốn'
                },
                {
                    element: searchBtn,
                    suggestion: 'Nhấn vào nút "Tìm kiếm" để tiếp tục'
                }
            ]);
        })
	</script>
@endsection
